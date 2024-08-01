<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once(__DIR__ . '/../public/vendor/autoload.php');

class MailController
{
    private $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    public function handleRequest()
    {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
            $this->sendEmails();
        }
    }

    private function sendEmails()
    {
        $emails = [
            'artemka.stec@gmail.com',
            // 'oxy4444@gmail.com',
            $_POST['email']
        ];
        
        $futureTime = strtotime('+3 hours');
        
        $mailBody  = "MPK Reshitki | Новий запит на зворотній зв`язок:\n\n";
        $mailBody .= "Ім'я: " . $_POST['name'] . "\n";
        $mailBody .= "Email: " . $_POST['email'] . "\n";
        $mailBody .= "Телефон: " . $_POST['phone'] . "\n";
        $mailBody .= "Коментар: " . $_POST['message'] . "\n";
        $mailBody .= "Дата: " . date('d.m.Y H:i', $futureTime) . "\n";
        
        $messageBody  = "<b>MPK Reshitki | Новий запит на зворотній зв`язок:</b>\n\n";
        $messageBody .= "Ім'я: <b>" . $_POST['name'] . "</b>\n";
        $messageBody .= "Email: <b>" . $_POST['email'] . "</b>\n";
        $messageBody .= "Телефон: <b>" . $_POST['phone'] . "</b>\n";
        $messageBody .= "Коментар: <b>" . $_POST['message'] . "</b>\n";
        $messageBody .= "Дата: <b>" . date('d.m.Y H:i', $futureTime) . "</b>\n";
    
        $sentResult = false;
        foreach ($emails as $email) {
            if ($email === 'artemka.stec@gmail.com' || $email === 'oxy4444@gmail.com') {
                $sentResult = $this->sendMail($this->settings['mail_settings_prod'], $email, 'MPK Reshitki | Новий запит на зворотній зв`язок', $mailBody);
            } else {
                $this->sendMail($this->settings['mail_settings_prod'], $email, 'Підтвердження отримання Вашого запиту', 'Дякуємо за Ваш запит. Найближчим часом ми зв`яжемось з Вами.');
            }
        }
    
        if ($sentResult === true) {
            echo "Ваш запит було надіслано. Найближчим часом з Вами зв'яжеться оператор";
            $this->sendTgMessage($messageBody);
        } else {
            echo "Помилка при надсиланні запиту";
        }
    }

    private function sendMail($mailSettings, $recipient, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = $mailSettings['host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $mailSettings['username'];
            $mail->Password   = $mailSettings['password'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $mailSettings['port'];
    
            //Recipients
            $mail->setFrom($mailSettings['from_email'], $mailSettings['from_name']);
            $mail->addAddress($recipient);
    
            //Content
            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body    = $body;
    
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    private function sendTgMessage ($message) {
        $botToken = '6799759121:AAFuoPfDtnyQ-upF18_CnsgCv2_XpQBy9tw';
        $url      = "https://api.telegram.org/bot{$botToken}/sendMessage";
        $chatIds = [
            '6148689288',
            // '5138749285'
        ];
    
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
    
            curl_close($ch);
        }
    }
}