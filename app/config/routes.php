<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

use Phalcon\Mvc\Router;

$router = new Router(false);
$router->add('/ajax-cc/example', [
    'controller' => 'Ajax',
    'action' => 'example'
]);
$router->handle();

return $router;
