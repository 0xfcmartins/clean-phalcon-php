<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

use Phalcon\Config;

return new Config([
    "messages" => [
        "500ISE" => "500 Internal Server Error",
        "oldbrowser" => 'Está a usar um navegador <strong>desatualizado!</strong> Por razões de segurança atualize '
            . 'seu navegador imediatamente!<a href="//browsehappy.com/" class="btn-link"><strong>Aqui</strong>.</a>',
        "ajax-only" => "This page can only be accessed via XMLHttpRequest <b>POST</b> request!"
    ],
    "popups" => [
        "success" => "Successful!"
    ],
    "placeholders" => [
        "form.registry.city" => "City"
    ],
    "validations" => [
        "form.registry.city.error" => "Invalid city name!"
    ],
    "config" => [
        "page_title" => "Phalcon MVC",
        "meta_title" => "Phalcon MVC clean template",
        "meta_image" => "none"
    ]
]);