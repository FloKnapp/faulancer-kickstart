<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/environment.conf.php';

if (defined('APPLICATION_ENV') && APPLICATION_ENV !== 'production') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

$serviceLocator = \Faulancer\ServiceLocator\ServiceLocator::instance();

/** @var \Faulancer\Service\Config $config */
$config = $serviceLocator->get(\Faulancer\Service\Config::class);
$config->set(require __DIR__ . '/config/app.conf.php');

/** @var \Faulancer\Service\RequestService $request */
$request = $serviceLocator->get(\Faulancer\Service\RequestService::class);

/** @var \Faulancer\Service\SessionManagerService $sessionManager $session */
$sessionManager = $serviceLocator->get(\Faulancer\Service\SessionManagerService::class);
$sessionManager->startSession();

$dbManager = $serviceLocator->get(\Faulancer\Service\DbService::class);

if (php_sapi_name() !== 'cli') {
    $request->createFromHeaders();
    $kernel = new \Faulancer\Kernel($request, $config);
    echo $kernel->run();
}