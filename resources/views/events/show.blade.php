@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>{{ $event->title }}</h3>

    <div class="tickets">
      @foreach ($event->tickets as $ticket)
        <li>{{ $ticket->type }} Ticket: ${{ $ticket->price }}</li>
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
