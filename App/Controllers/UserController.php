<?php


use App\Core\View;
use App\Models\User;

class UserController
{

    public function index()
    {
        $userModel = new User();

        $userModel->select("SELECT * FROM users WHERE username = :username");
        $userModel->bind(':username', "amir2024");
        $data = $userModel->fetch();



        View::view('panel/profile', $data);
    }
}
