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
    'site' => [
        'phone'   => '+380982709669',
        'email'   => 'contact@reshitki.com',
        'address' => '04594, Київська обл., с. Княжичі, вул. Слави, 19'
    ],
    'pages' => [
        PAGE_INDEX => [
            'title'       => 'Виробництво решітчастого настилу',
            'description' => 'У нашому асортименті представлені різні види ґрат. Ми пропонуємо пресовані та зварені грати з антикорозійним покриттям, включаючи гаряче цинкування.',
            'template'    => PAGE_INDEX . '-temp.php',
            'public'      => true,
            'product'     => false
        ],
        PAGE_404 => [
            'title'       => 'Помилка 404',
            'description' => 'Cторінка, яку ви шукаєте, не існує або була переміщена.',
            'template'    => PAGE_404 . '-temp.php',
            'public'      => false,
            'product'     => false
        ],
        PAGE_CONTACT => [
            'title'       => 'Контакти',
            'description' => '',
            'template'    => PAGE_CONTACT . '-temp.php',
            'public'      => true,
            'product'     => false
        ],
        PAGE_GALLERY => [
            'title'       => 'Галерея робіт',
            'description' => '',
            'template'    => PAGE_GALLERY . '-temp.php',
            'public'      => true,
            'product'     => false
        ],
        'zvarnyi-nastyl' => [
            'title'       => 'Зварний настил',
            'description' => '',
            'template'    => 'zvarnyi-nastyl-temp.php',
            'public'      => true,
            'product'     => true
        ],
        'presovanyi-nastyl' => [
            'title'       => 'Пресований настил',
            'description' => '',
            'template'    => 'presovanyi-nastyl-temp.php',
            'public'      => true,
            'product'     => true
        ],
        'skhodynky' => [
            'title'       => 'Сходинки',
            'description' => '',
            'template'    => 'skhodynky-temp.php',
            'public'      => true,
            'product'     => true
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
        'is_html'     => false,
        'to'          => [
            'artemka.stec@gmail.com',
            // 'oxy4444@gmail.com',
            // $data['email']
        ]
    ],
    'telegram' => [
        'token' => '6799759121:AAFuoPfDtnyQ-upF18_CnsgCv2_XpQBy9tw',
        'to' => [
            '6148689288', // Aa
            // '5138749285' // Vladimir
        ],
    ]
];