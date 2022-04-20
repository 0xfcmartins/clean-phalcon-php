<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

namespace Sipe\Utils;

use Exception;
use Phalcon\Http\Response;

/**
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-02-3 22:59
 */
class ExceptionHandler
{
    static public function handle(Exception $exception): Response
    {
        try {
            $response = new Response();
            $response->setContent($exception->getMessage());

            return $response;
        } catch (Exception $e) {
            return new Response();
        }
    }
}