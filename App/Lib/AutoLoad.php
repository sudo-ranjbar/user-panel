<?php


class AutoLoad
{

    private static $_instance = null;

    private function __construct()
    {

        spl_autoload_register([$this, 'loader']);
    }

    public static function _instance()
    {

        if (!self::$_instance) {

            self::$_instance = new AutoLoad();
        } else {

            return self::$_instance;
        }
    }

    private function loader($className)
    {

        $ds = DIRECTORY_SEPARATOR;
        $dir = ROOT_PATH;

        // replace namespace separator with directory separator (prolly not required)
        $className = str_replace('\\', $ds, $className);

        // get full name of file containing the required class
        $file = "{$dir}{$ds}{$className}.php";

        // get file if it is readable
        if (is_readable($file)) require_once $file;
    }

}
