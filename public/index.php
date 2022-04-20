<?php

/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

error_reporting(E_ALL);

define('APP_PATH', realpath('..') . '/');

use Phalcon\Mvc\Application;
use Sipe\Services\Core\ApplicationLoader;
use Sipe\Services\ServicesManager;

/**
 * Phalcon application bootstrap
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-02-3 22:42
 */
try {
    include APP_PATH . "app/services/core/ApplicationLoader.php";
    $config = include APP_PATH . "app/config/config.php";

    ApplicationLoader::register($config);

    $application = new Application();
    $application->setDI(new ServicesManager($config));
    $application->handle()->send();
} catch (Exception $e) {
    echo $e->getMessage();
}
