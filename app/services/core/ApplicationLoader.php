<?php

namespace App\Services\Core;

use Phalcon\Config;
use Phalcon\Loader;

/**
 * Application loader
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2021-11-8 12:20
 */
class ApplicationLoader
{
    /**
     * Registers the project directories and namespaces
     *
     * @param $baseConfig Config Base configuration
     */
    public static function register(Config $baseConfig)
    {
        $loader = new Loader();
        if (isset($baseConfig->application))
            $loader->registerDirs((array)$baseConfig->application);
        if (isset($baseConfig->namespaces))
            $loader->registerNamespaces((array)$baseConfig->namespaces);
        $loader->register();
    }

}