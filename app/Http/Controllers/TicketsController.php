<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Ticket;

class TicketsController extends Controller
{

    public function store(Event $event){
      $event->addTicket(request('type'), request('price'));
      return back();
    }

}
