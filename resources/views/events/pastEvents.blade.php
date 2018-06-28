@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>Past Events:</h3>

    @foreach ($events as $event)
      <li>
        <a href="/events/{{ $event->id }}">
          {{ $event->title }}
        </a>
      </li>
    @endforeach

    <a href="events/create"><input class="button-primary" type="button" value="Create Event"></a>

  </div>

@endsection
