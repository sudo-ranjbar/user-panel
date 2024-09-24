<?php

namespace App\Models;

use App\Models\Contracts\PDO_Connection;

class User extends PDO_Connection
{
    protected $table = 'users';




    public function __construct()
    {
        $this->connection = PDO_Connection::getInstance();
    }




    public function findUserByEmail($email): bool
    {
        $this->connection->select("SELECT * FROM users WHERE email = :email");
        $this->connection->bind(':email', $email);

        if ($this->connection->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
