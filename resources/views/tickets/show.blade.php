@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>{{ $ticket->type }} Ticket: ${{ $ticket->price }}</h3>

    <form method="POST" action="/tickets/{{ $ticket->id }}/buy">
      {{ csrf_field() }}
      <label for="quantity">Quantity</label>
      <select class="u-full-width" id="quantity" name="quantity" placeholder="How many tickets?">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>

      <label for="firstName">First Name</label>
      <input class="u-full-width" type="text" id="firstName" name="firstName">

      <label for="lastName">Last Name</label>
      <input class="u-full-width" type="text" id="lastName" name="lastName">

      <label for="email">Email</label>
      <input class="u-full-width" type="email" id="email" name="email">

      <label for="phoneNumber">Phone Number</label>
      <input class="u-full-width" type="text" id="phoneNumber" name="phoneNumber">

      <label for="allergies">Allergies</label>
      <input class="u-full-width" type="text" id="allergies" name="allergies">

      <input class="button-primary" type="submit" value="Continue to Payment">

    </form>

    {{-- <a href="/tickets/{{ $ticket->id }}/buy"><input class="button-primary" type="button" value="Get Ticket"></a> --}}

  </div>

@endsection
