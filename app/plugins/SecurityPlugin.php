<?php

/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\User\Plugin;

/**
 *  Plugin that validates the session access to certain component
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-02-3 22:52
 */
class SecurityPlugin extends Plugin
{

    const ROLE = "GENERIC.APPLICATION.USER";

    public function beforeDispatch(Event $event, Dispatcher $dispatcher)
    {
        try {
            $var = $dispatcher;
        } catch (Exception $e) {

        }
    }

}
