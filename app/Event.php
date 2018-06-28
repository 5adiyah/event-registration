<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function tickets(){
      return $this->hasMany(Ticket::class);
    }

    public function addTicket($type, $price){
      //Create a new event using the request data
      $ticket = new Ticket;
      $ticket->type = request('type');
      $ticket->price = request('price');
      $ticket->event_id = $this->id; //relate this event to the ticket
      //Save it to the Database
      $ticket->save();
    }

    public function scopePastEvent($query){
      return $query->where('eventStatus', 'past');
    }

    public function scopeCurrentEvent($query){
      return $query->where('eventStatus', 'current');
    }

    public function scopeFutureEvent($query){
      return $query->where('eventStatus', 'future');
    }
}
