<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

namespace Sipe\Services;

use Phalcon\Events\Manager;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Session\Adapter\Files;
use Sipe\Services\Core\DependencyInjector;
use Sipe\Utils\Translator;


/**
 * Application dependencies injector manager
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2021-11-8 13:47
 */
class ServicesManager extends DependencyInjector
{

    public function initDispatcher(): Dispatcher
    {
        $eventsManager = new Manager();
        $dispatcher = new Dispatcher();
        $dispatcher->setEventsManager($eventsManager);

        return $dispatcher;
    }

    protected function initBaseUrl()
    {
        return $this->getConfig()->application->baseUri;
    }

    public function initUrl(): Url
    {
        $url = new Url();
        $url->setBaseUri(
            $this->getConfig()->application->domain
        );

        return $url;
    }

    public function initView(): View
    {
        $view = new View();
        $view->setViewsDir($this->getConfig()->application->viewsDir);
        $view->registerEngines(array(
            ".volt" => 'volt'
        ));

        return $view;
    }

    protected function initVolt($view, $di): Volt
    {
        $volt = new Volt($view, $di);
        $volt->setOptions(array(
            "compiledPath" => $this->getConfig()->system->voltCache,
            'compiledSeparator' => '_',
            'compileAlways' => true
        ));

        return $volt;
    }

    public function initSession(): Files
    {
        $session = new Files();
        $session->start();

        return $session;
    }

    protected function initTranslator(): Translator
    {
        return new Translator();
    }

    protected function initApp(): ApplicationService
    {
        return new ApplicationService();
    }

}