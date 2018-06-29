<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Ticket;

class OrderController extends Controller
{
  public function store(Ticket $ticket){
    $ticket->addOrder(
      request('quantity'),
      request('firstName'),
      request('lastName'),
      request('email'),
      request('phoneNumber'),
      request('allergies')
    ); //This is in Ticket Model
    return back();
  }
}
