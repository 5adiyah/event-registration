@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>{{ $ticket->type }} Ticket: ${{ $ticket->price }}</h3>

    <a href="/tickets/{{ $ticket->id }}/buy"><input class="button-primary" type="button" value="Get Ticket"></a>

  </div>

@endsection
