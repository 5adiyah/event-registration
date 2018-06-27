<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Ticket;

class TicketsController extends Controller
{

    public function store(Event $event){
      //Create a new event using the request data
      $ticket = new Ticket;
      $ticket->type = request('type');
      $ticket->event_id = $event->id;
      $ticket->price = request('price');
      //Save it to the Database
      $ticket->save();
      //Redirect to the events page
      return back();
    }

}
