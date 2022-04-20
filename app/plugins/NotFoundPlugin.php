<?php

/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

use Phalcon\Dispatcher;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher as MvcDispatcher;
use Phalcon\Mvc\Dispatcher\Exception as DispatcherException;
use Phalcon\Mvc\User\Plugin;

/**
 * Plugin that handles unhandled routes
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-01-20 22:38
 */
class NotFoundPlugin extends Plugin
{

    public function beforeException(Event $event, MvcDispatcher $dispatcher, Exception $exception): bool
    {
        error_log($event->getSource(), $exception->getMessage() . PHP_EOL . $exception->getTraceAsString());
        if ($exception instanceof DispatcherException) {
            switch ($exception->getCode()) {
                case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                    $dispatcher->forward(
                        [
                            'controller' => 'Errors',
                            'action' => 'show404'
                        ]
                    );
                    return false;
            }
        }
        $dispatcher->forward(
            [
                'controller' => 'Errors',
                'action' => 'show500'
            ]
        );

        return false;
    }
}
