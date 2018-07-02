@extends('layouts.master')

@section('content')

  <div class="eventContainer">
    <h3>{{ $event->title }}</h3> <hr>
    <div class="eventFlyer">
      <img src="/storage/{{ $event->imageUrl }}">
    </div>
    <div class="eventDetails">
      <p><strong>Start Date:</strong> {{ $event->startDate }}</p>
      <p><strong>End Date:</strong> {{ $event->endDate }}</p>
      <p><strong>Location:</strong> {{ $event->location }}</p>
      <p>{!! $event->description !!}</p>
    </div>
  </div>

  <div class="container">

    <div class="tickets links">
      @foreach ($event->tickets as $ticket)
          <a href="/events/{{ $event->id }}/tickets/{{ $ticket->id }}"><h5 class="ticketLink">{{ $ticket->type }} Ticket:&nbsp; ${{ $ticket->price }}</h5></a>
      @endforeach
    </div>

    <hr>

    <form method="POST" action="/events/{{ $event->id }}/tickets">
      {{ csrf_field() }}
      <label for="type">Ticket Type</label>
      <input class="u-full-width" type="text" id="type" name="type">

      <label for="price">Ticket Price</label>
      <input class="u-full-width" type="text" id="price" name="price">

      {{-- <label for="eventStatus">Event Type</label>
      <select class="u-full-width" id="exampleRecipientInput">
        <option value="past">Past Event</option>
        <option value="current">Current Event</option>
        <option value="future">Future Event</option>
      </select> --}}

      <input class="button-primary" type="submit" value="Submit">

    </form>

  </div>

@endsection
