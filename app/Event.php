<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
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
