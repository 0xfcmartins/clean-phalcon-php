<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

class ErrorController
{

    public function show404Action()
    {
        try {

            return parent::response('{"success":true}');
        } catch (Exception $e) {

            return parent::HandleException(__CLASS__, __FUNCTION__, $e);
        }
    }

}