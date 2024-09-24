<?php


use App\Core\View;

class HomeController
{

    public function index()
    {

        View::view('panel/panel');
    }
}
