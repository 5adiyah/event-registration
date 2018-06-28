@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>{{ $ticket->type }} Ticket: ${{ $ticket->price }}</h3>

    <a href="#"><input class="button-primary" type="button" value="Buy Ticket"></a>

  </div>

@endsection
