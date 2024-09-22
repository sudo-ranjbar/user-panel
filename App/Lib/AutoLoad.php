<?php


class AutoLoad
{

    private static $_instance = null;

    public function __construct()
    {

        spl_autoload_register([$this, 'autoloader']);

    }

    public static function _instance()
    {

        if (!self::$_instance) {

            self::$_instance = new AutoLoad();

        } else {

            return self::$_instance;

        }
    }

    public function autoloader($class){

        require_once ROOT_PATH . '/App/Core/' . $class . '.php';

    }
}
