@extends('layouts.master')

@section('content')

  <div class="eventContainer">
    <h3>{{ $event->title }}</h3>
    <div class="eventFlyer">
      <img src="/storage/{{ $event->imageUrl }}">
    </div>
    <div class="eventDetails">
      <p><strong>Start Date:</strong> {{ $event->startDate }}</p>
      <p><strong>End Date:</strong> {{ $event->endDate }}</p>
      <p><strong>Location:</strong> {{ $event->location }}</p>
      <p>{!! $event->description !!}</p>

      <div class="tickets links">
        @foreach ($event->tickets as $ticket)
            <a href="/events/{{ $event->id }}/tickets/{{ $ticket->id }}"><h5 class="ticketLink">{{ $ticket->type }} Ticket:&nbsp; ${{ $ticket->price }}</h5></a>
        @endforeach
      </div>
    </div>
  </div>

@endsection
