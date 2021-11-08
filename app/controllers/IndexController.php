<?php

/**
 * Root controller and actions
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2021-11-8 14:30
 */
class IndexController extends BaseController
{
    public function indexAction()
    {
        $this->view->hello = "Hello world!";
    }

}
