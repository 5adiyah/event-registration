<?php

namespace App\Http\Controllers;

use App\Event;
// use puplic\vendor\TCG\Voyager\Models\Event;
use App\Ticket;

class EventsController extends Controller
{
    public function home(){
      $events = Event::all();
      return view('events', compact('events'));
    }

    public function index(){ //might not need this
      $events = Event::all();
      return view('events', compact('events'));
    }

    public function show(Event $event){
      return view('events.show', compact('event'));
    }

    public function create(){
      return view('events.create');
    }

    public function store(){
      //Create a new event using the request data
      $event = new Event;
      $event->title = request('title');
      $event->eventStatus = request('eventStatus');
      $event->startDate = request('startDate');
      $event->endDate = request('endDate');
      $event->location = request('location');
      $event->imageUrl = request('imageUrl');
      $event->description = request('description');
      //Save it to the Database
      $event->save();
      //Redirect to the events page
      return redirect('/events');
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

    public function payment(){
      return view('paymentForm');
    }
}
