@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>Future Events:</h3>

    @foreach ($events as $event)
      <li>
        <a href="/events/{{ $event->id }}">
          {{ $event->title }}
        </a>
      </li>
    @endforeach

  </div>

@endsection
