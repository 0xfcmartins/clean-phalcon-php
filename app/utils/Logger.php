<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

namespace Sipe\Utils;

use Phalcon\Loader as LoggerHandler;
use Phalcon\Logger\Adapter\File;


class Logger extends LoggerHandler
{

    private const OUTPUT = "test.log";

    public static function write($message)
    {
        $handler = new File(self::OUTPUT);
        $handler->critical($message);
    }
}