<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

use Phalcon\Config;

return new Config(
    [
        "domain" => "",
        "system" => [
            "voltCache" => APP_PATH . "app/cache/",
        ],
        "application" => [
            "controllersDir" => APP_PATH . "app/controllers/",
            "viewsDir" => APP_PATH . "app/views/",
            "pluginsDir" => APP_PATH . "app/plugins/",
            "libraryDir" => APP_PATH . "app/library/",
            "cacheDir" => APP_PATH . "app/cache/",
            "servicesDir" => APP_PATH . "app/services/",
            "utilsDir" => APP_PATH . "app/utils/",
            "baseUri" => "/mvc/simple-volt/",
        ],
        'namespaces' => [
            'Sipe\Services' => APP_PATH . 'app/services/',
            'Sipe\Services\Core' => APP_PATH . 'app/services/core/',
            'Sipe\Utils' => APP_PATH . 'app/utils/',
            'Sipe\Plugins' => APP_PATH . 'app/plugins/',
            'Sipe\Exceptions' => APP_PATH . 'app/exceptions/',
        ]
    ]
);
