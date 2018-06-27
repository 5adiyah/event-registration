<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController extends Controller
{
    public function index(){
      $events = App\Event::all();

      return view('events', compact('events'));
    }
}
