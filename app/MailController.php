<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once(__DIR__ . '/../vendor/autoload.php');

class MailController
{
    private $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    public function constructMessage($data)
    {
        $emails     = $this->settings['mail']['to'];
        $futureTime = strtotime('+3 hours');

        $mailMessage = $this->generateMailMessage($data, $futureTime);
        $tgMessage   = $this->generateTgMessage($data, $futureTime);

        $sentResult = false;

        foreach ($emails as $email) {
            if ($email === 'artemka.stec@gmail.com' || $email === 'oxy4444@gmail.com') {
                $sentResult = $this->send($this->settings['mail'], $email, 'MPK Reshitki | Новий запит на зворотній зв`язок', $mailMessage);
            } else {
                $this->send($this->settings['mail'], $email, 'Підтвердження отримання Вашого запиту', 'Дякуємо за Ваш запит. Найближчим часом ми зв`яжемось з Вами.');
            }
        }

        if ($sentResult) {
            echo "Ваш запит було надіслано. Найближчим часом з Вами зв'яжеться оператор";
            $this->sendTgMessage($tgMessage);

            return true;
        } else {
            echo "Помилка при надсиланні запиту";

            return false;
        }
    }

    private function generateMailMessage($data, $futureTime)
    {
        return "MPK Reshitki | Новий запит на зворотній зв`язок:\n\n"
            . "Ім'я: " . (!empty($data['name']) ? $data['name'] : 'Не вказано') . "\n"
            . "Email: " . (!empty($data['email']) ? $data['email'] : 'Не вказано') . "\n"
            . "Телефон: " . (!empty($data['phone']) ? $data['phone'] : 'Не вказано') . "\n"
            . "Коментар: " . (!empty($data['message']) ? $data['message'] : 'Не вказано') . "\n"
            . "Дата: " . date('d.m.Y H:i', $futureTime) . "\n";
    }

    private function generateTgMessage($data, $futureTime)
    {
        return "<b>MPK Reshitki | Новий запит на зворотній зв`язок:</b>\n\n"
            . "Ім'я: <b>" . (!empty($data['name']) ? $data['name'] : 'Не вказано') . "</b>\n"
            . "Email: <b>" . (!empty($data['email']) ? $data['email'] : 'Не вказано') . "</b>\n"
            . "Телефон: <b>" . (!empty($data['phone']) ? $data['phone'] : 'Не вказано') . "</b>\n"
            . "Коментар: <b>" . (!empty($data['message']) ? $data['message'] : 'Не вказано') . "</b>\n"
            . "Дата: <b>" . date('d.m.Y H:i', $futureTime) . "</b>\n";
    }

    private function send($settings, $to, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = $settings['host'];
            $mail->SMTPAuth   = $settings['auth'];
            $mail->Username   = $settings['username'];
            $mail->Password   = $settings['password'];
            $mail->SMTPSecure = $settings['secure'];
            $mail->Port       = $settings['port'];
            $mail->CharSet    = $settings['charset'];
    
            //Recipients
            $mail->setFrom($settings['from_email'], $settings['from_name']);
            $mail->addAddress($to);
    
            //Content
            $mail->isHTML($settings['is_html']);
            $mail->Subject = $subject;
            $mail->Body    = $body;
    
            $mail->send();
            return true;
        } catch (Exception $e) {
            error_log('Mailer Error: ' . $mail->ErrorInfo, 3, __DIR__ . '/../error.log');
            return false;
        }
    }

    private function sendTgMessage($message)
    {
        $botToken = $this->settings['telegram']['token'];
        $url      = "https://api.telegram.org/bot{$botToken}/sendMessage";
        $chatIds  = $this->settings['telegram']['to'];

        foreach ($chatIds as $chatId) {
            $data = [
                'chat_id'    => $chatId,
                'text'       => $message,
                'parse_mode' => 'HTML'
            ];

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);

            if ($response === false) {
                error_log('Telegram Error: ' . curl_error($ch), 3, __DIR__ . '/../error.log');
            } else {
                $responseData = json_decode($response, true);
                if (!$responseData['ok']) {
                    error_log('Telegram API Error: ' . $responseData['description'], 3, __DIR__ . '/../error.log');
                }
            }

            curl_close($ch);
        }
    }
}