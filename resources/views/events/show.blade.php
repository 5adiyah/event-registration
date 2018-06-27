@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>{{ $event->title }}</h3>

    <div class="tickets">
      @foreach ($event->tickets as $ticket)
        <li>{{ $ticket->type }} Ticket: ${{ $ticket->price }}</li>
      @endforeach
    </div>

  </div>

@endsection
