<?php

error_reporting(E_ALL);

use App\Services\Core\ApplicationLoader;
use Phalcon\Mvc\Application;
use App\Services\ServicesManager;

try {
    require_once __DIR__ . "/../app/services/core/ApplicationLoader.php";

    $config = require_once __DIR__ . "/../app/config/config.php";
    ApplicationLoader::register($config);

    $application = new Application();
    $application->setDI(new ServicesManager($config));
    $application->handle($config->domain)->send();
} catch (Exception $e) {
    echo $e->getMessage();
}
