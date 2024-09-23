<?php
namespace App\Models;

use App\Models\Contracts\PDO_Connection;

class User
{
    
    private $db;

    public function __construct()
    {
        $this->db = PDO_Connection::getInstance();
    }
}