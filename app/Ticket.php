<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

  public function event(){
    return $this->belongsTo(Event::class);
  }

  public function addOrder($quantity, $firstName, $lastName, $email, $phoneNumber, $allergies){
    // Create a new order using the request data
    $order = new Order;
    $order->quantity = request('quantity');
    $order->firstName = request('firstName');
    $order->lastName = request('lastName');
    $order->email = request('email');
    $order->phoneNumber = request('phoneNumber');
    $order->allergies = request('allergies');
    $order->ticket_id = $this->id; //relate this ticket to the order
    //Save it to the Database
    $order->save();
  }

}
