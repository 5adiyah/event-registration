<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Ticket;

class TicketsController extends Controller
{

    public function store(Event $event){
      $event->addTicket(request('type'), request('price')); //This is in Event Model
      return back();
    }

    public function show(Event $event, Ticket $ticket){
      return view('tickets.show', compact('ticket'));
    }

}
