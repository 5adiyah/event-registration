@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>{{ $ticket->type }} Ticket: ${{ $ticket->price }}</h3>

    <form method="POST" id="payment-form" action="/tickets/{{ $ticket->id }}/buy">
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

      <div class="form-row">
        <label for="card-element"> Credit or debit card </label>
        <div id="card-element">
          <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display Element errors. -->
        <div id="card-errors" role="alert"></div>
      </div>

      <input class="button-primary" type="submit" value="Submit Payment">

    </form>

    <script src="{{URL::asset('js/stripe.js')}}"></script>

  </div>

@endsection
