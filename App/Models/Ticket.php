<?php

namespace App\Models;

use App\Models\Contracts\PDO_Connection;

class Ticket extends PDO_Connection
{
    protected $table = 'tickets';




    public function __construct()
    {
        $this->connection = PDO_Connection::getInstance();
    }




    public function getAllTicketsByEmail($user_email): bool
    {
        $this->connection->select("SELECT * FROM tickets WHERE user_email = :user_email");
        $this->connection->bind(':user_email', $user_email);
        $user_tickets = $this->connection->fetchAll();

        if ($this->connection->rowCount() > 0) {
            return $user_tickets;
        } else {
            return null;
        }
    }
}
