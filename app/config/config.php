<?php

use Phalcon\Config;

return new Config(
    [
        "domain" => "http://localhost/",
        "system" => [
            "voltCache" => __DIR__ . "/../../app/cache/",
        ],
        "application" => [
            "controllersDir" => __DIR__ . "/../../app/controllers/",
            "modelsDir" => __DIR__ . "/../../app/models/",
            "viewsDir" => __DIR__ . "/../../app/views/",
            "pluginsDir" => __DIR__ . "/../../app/plugins/",
            "libraryDir" => __DIR__ . "/../../app/library/",
            "cacheDir" => __DIR__ . "/../../app/cache/",
            "servicesDit" => __DIR__ . "/../../app/services/"
        ],
        "namespaces" => [
            'App\Controllers' => __DIR__ . "/../../app/controllers/",
            'App\Services' => __DIR__ . "/../../app/services/",
        ]
    ]
);
