<?php

class UserController extends Controller
{

    private $userModel;


    public function __construct()
    {

        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $this->view('panel/profile');
    }
}
