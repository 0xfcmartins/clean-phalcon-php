<?php

namespace App\Services;

use App\Services\Core\DependencyInjector;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Session\Manager;
use Phalcon\Url;

class ServicesManager extends DependencyInjector
{

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

    public function initSession(): Manager
    {
        $session = new Manager();
        $session->start();

        return $session;
    }

}