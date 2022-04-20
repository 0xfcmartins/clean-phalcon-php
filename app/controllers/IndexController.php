<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

/**
 * Root controller and actions
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2021-11-8 14:30
 */
class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->content = "Hello World!";
    }

    public function anotherAction()
    {
        $this->view->content = "AnotherPage!";
    }

}
