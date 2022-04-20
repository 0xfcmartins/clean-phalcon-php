<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

namespace Sipe\Services;

use Phalcon\Di\Injectable;

/**
 * Application generic service
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-02-3 22:53
 */
class ApplicationService extends Injectable
{
    public function getConfig(string $key): string
    {
        return $key;
    }
}