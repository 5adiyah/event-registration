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
      $ticket->event_id = $this->id;
      $ticket->price = request('price');
      //Save it to the Database
      $ticket->save();
      //Redirect to the events page
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
