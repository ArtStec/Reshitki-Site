<?php

define('SITE_URL', 'reshitki.my');

define('PATH_APP', 'app/');
define('PATH_TEMPLATE', 'public/templates/');
define('PATH_ASSETS', 'public/assets/');

define('PAGE_INDEX', 'index');
define('PAGE_CONTACT', 'contact');
define('PAGE_GALLERY', 'gallery');
define('PAGE_404', '404');

$settings = [
    'pages' => [
        PAGE_INDEX => [
            'title'       => 'Виробництво решітчастого настилу | MPK',
            'description' => '',
            'template'    => PAGE_INDEX . '-temp.php'
        ],
        PAGE_CONTACT => [
            'title'       => 'Контакти | MPK',
            'description' => '',
            'template'    => PAGE_CONTACT . '-temp.php'
        ],
        PAGE_GALLERY => [
            'title'       => 'Галерея робіт | MPK',
            'description' => '',
            'template'    => PAGE_GALLERY . '-temp.php'
        ],
        PAGE_404 => [
            'title'       => 'Помилка 404 | MPK',
            'description' => 'Cторінка, яку ви шукаєте, не існує або була переміщена.',
            'template'    => PAGE_404 . '-temp.php'
        ],
        'zvarnyi-nastyl' => [
            'title'       => 'Зварний решітчастий настил | MPK',
            'description' => '',
            'template'    => PAGE_404 . 'zvarnyi-nastyl-temp.php'
        ]
    ],
    'mail' => [
        'host'        => 's29.server-panel.net',
        'auth'        => true,
        'port'        => 465, 
        'secure'      => 'ssl', 
        'username'    => 'no-reply@reshitki.com', // contact / no-reply
        'password'    => 'WuukQi,}4XzJ', // UGs$qc)@=p1( - contact / WuukQi,}4XzJ - no-reply
        'charset'     => 'UTF-8',
        'from_email'  => 'no-reply@reshitki.com',
        'from_name'   => 'MPK Reshitki',
        'is_html'     => false
    ],
    'telegram' => [
        'token' => '6799759121:AAFuoPfDtnyQ-upF18_CnsgCv2_XpQBy9tw',
        'users' => [
            '6148689288', // Aa
            // '5138749285'
        ],
    ],
];