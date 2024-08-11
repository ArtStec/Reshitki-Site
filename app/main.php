<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../config.php');
require_once(__DIR__ . '/PageController.php');
require_once(__DIR__ . '/MailController.php');

$page = new PageController($settings);
$page = $page->getParams(); 

// var_dump($settings['mail']);

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $data = [
        'name'    => $_POST['name'],
        'email'   => $_POST['email'],
        'phone'   => $_POST['phone'],
        'message' => $_POST['message']
    ];

    $mailController = new MailController($settings);
    $mailController->constructMessage($data);
}