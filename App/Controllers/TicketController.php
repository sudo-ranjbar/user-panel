<?php


use App\Core\View;
use App\Models\Ticket;
use App\Models\User;

class TicketController
{

    public function index()
    {
        $ticket_model = new Ticket();
        $user_model = new User();

        $user_model->select("SELECT * FROM users WHERE email=`amircoder1400@gmail.com`");
        $current_user = $user_model->fetch();
        
        $user_tickets = $ticket_model->getAllTicketsByEmail($current_user['email']);



        View::view('panel/ticket/ticket', $user_tickets);
    }
}
