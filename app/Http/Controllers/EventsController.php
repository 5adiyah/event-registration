<?php

namespace App\Http\Controllers;

use App\Event;

class EventsController extends Controller
{
    public function home(){
      return view('home');
    }

    public function index(){
      $events = Event::all();
      return view('events', compact('events'));
    }

    public function show(Event $event){
      return view('events.show', compact('event'));
    }

    public function pastEvents(){
      $events = Event::PastEvent()->get();
      return view('events.pastEvents', compact('events'));
    }

    public function currentEvents(){
      $events = Event::CurrentEvent()->get();
      return view('events.currentEvents', compact('events'));
    }

    public function futureEvents(){
      $events = Event::FutureEvent()->get();
      return view('events.futureEvents', compact('events'));
    }
}
