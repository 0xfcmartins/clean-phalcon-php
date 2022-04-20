<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

use Phalcon\Dispatcher;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;

/**
 * Plugin that handles exceptions on the dispatchment cicle
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-02-3 22:50
 */
class BeforeExceptionPlugin extends Plugin
{
    public function beforeException(Event $event, Dispatcher $dispatcher, Exception $exception): bool
    {
        return true;
    }
}