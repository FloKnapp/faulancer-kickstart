<?php



return [

    /*
     * These are the supported core options; you may add custom options if needed but
     * please don't change the core options!
     */

    'index' => [
        'path'       => '/',
        'controller' => \App\Controller\WebsiteController::class,
        'action'     => 'index',      // Note that the term 'Action' is appended through the dispatcher
        'method'     => ['GET'],      // Optional; You can restrict routes to methods. Default is 'GET'
        'title'      => 'Home',       // Optional; This is the text which is outputted if you use the 'Link' view helper
        'i18n_key'   => 'link_index', // Optional; You may set the translation key as defined in 'translations.conf.php'
        'permission' => null,         // Optional; 'null' is default. Example: ['admin', 'moderator']
    ],

    /*
     * Here is an example for dynamic routes (like an article id).
     *
     * You may notice that the placeholder pretty looks the same as a regular expression.
     * That's because it is in fact a regular expression and gets applied as is. In this
     * example i match only digits (0-9) as many as given (i.e.: '434214' would be valid too)
     */

    'article' => [
        'path'       => '/article/(\d+)',
        'controller' => \App\Controller\WebsiteController::class,
        'action'     => 'index',      // Note that the term 'Action' is appended through the dispatcher
        'method'     => ['GET'],      // Optional; You can restrict routes to methods. Default is 'GET'
    ]
];