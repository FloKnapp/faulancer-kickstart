<?php

return [
    'namespacePrefix'       => 'App',
    'projectRoot'           => __DIR__ . '/..',
    'viewsRoot'             => __DIR__ . '/../template',
    'applicationRoot'       => __DIR__ . '/../src',
    'routes'                => require_once __DIR__ . '/routes.conf.php',
    'translation'           => require_once __DIR__ . '/translations.conf.php',
    'eventListener'         => require_once __DIR__ . '/event-listener.conf.php',
    'customErrorController' => \App\Controller\Error\ErrorController::class,

    'db' => [
        'type'     => 'db_type (i.e. mysql)',
        'name'     => 'db_scheme',
        'username' => 'db_user',
        'password' => 'db_pass'
    ],

    'auth' => [
        'authUrl'          => '/user/login',
        'registerUrl'      => '/user/register',
        'authFailTemplate' => __DIR__ . '/../template/error/authFail.phtml',
        'authEntity'       => \App\Entity\UserEntity::class
    ],

    'log' => [
        'debug' => '/logs/debug.log',
        'error' => '/logs/error.log',
        'warn'  => '/logs/warning.log'
    ]
];