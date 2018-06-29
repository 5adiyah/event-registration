<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Ticket;
use Stripe;

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

    try{
      $charge = Stripe::charges()->create([
        'amount' => 2000,
        'currency' => 'USD',
        'source' => request('stripeToken'),
        'description' => 'Purchase a ticket',
        'receipt_email' => request('email'),
        'metadata' => [
          'data1' => 'metadata 1',
          'data2' => 'metadata 2',
          'data3' => 'metadata 3',
        ],
      ]);

      return view('payments');
    } catch(Exception $e){}
      
  }

}
