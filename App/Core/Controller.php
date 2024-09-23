<?php

namespace App\Core;

abstract class Controller
{


    protected function model($model)
    {

        require_once ROOT_PATH . '/App/Models/' . $model . '.php';
        return new $model;
    }

    protected function view($view, $data=[])
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
