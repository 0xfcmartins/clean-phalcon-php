<?php
/*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

/** @noinspection PhpIncludeInspection */

namespace Sipe\Utils;

use Exception;
use Phalcon\Config;
use Phalcon\Di\Injectable;
use Phalcon\Translate\Adapter\NativeArray;

/**
 *
 * @property Config $translation Translation file
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-01-20 23:8
 */
class Translator extends Injectable
{
    protected $lang;
    protected $translation;

    private function getUserServerLang()
    {
        try {
            return explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];
        } catch (Exception $e) {
            return "";
        }
    }

    public function __construct()
    {
        $file = APP_PATH . 'app/lang/' . $this->getUserServerLang() . '.php';

        if (file_exists($file)) {
            $this->translation = require $file;
        } else {
            $this->translation = require '../app/lang/pt-PT.php';
        }

        $this->lang = (object)array();
        foreach ($this->translation as $type => $value)
            $this->lang->$type = new NativeArray(['content' => (array)$value]);
    }

    public function getMessage($key): string
    {
        try {
            if ($this->lang->messages->exists($key))
                return $this->lang->messages->_($key);
            else
                return $key;
        } catch (Exception $e) {
            return $key;
        }
    }

    public function getPopupMessage($key): string
    {
        try {
            if ($this->lang->popups->exists($key))
                return $this->lang->popups->_($key);
            else
                return $key;
        } catch (Exception $e) {
            return $key;
        }
    }

    public function getPlaceHolder($key): string
    {
        try {
            if ($this->lang->placeholders->exists($key))
                return $this->lang->placeholders->_($key);
            else
                return $key;
        } catch (Exception $e) {
            return $key;
        }
    }

    public function getValidation($key): string
    {
        try {
            if ($this->lang->validations->exists($key))
                return $this->lang->validations->_($key);
            else
                return $key;
        } catch (Exception $e) {
            return $key;
        }
    }

    public function getConfig($key): string
    {
        try {
            if ($this->lang->config->exists($key))
                return $this->lang->config->_($key);
            else
                return $key;
        } catch (Exception $e) {
            return $key;
        }
    }

}