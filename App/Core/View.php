<?php

namespace App\Core;

class View
{

    public static function view($view, $data = [])
    {

        if (file_exists(ROOT_PATH . '/views/' . $view . '.php')) {
            // Load view file
            require_once ROOT_PATH . '/views/' . $view . '.php';
        } else {
            // view does not exist
            die('Page Not Found');
        }
    }
}
