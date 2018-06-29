@extends('layouts.master')

@section('content')

  <div class="container">

    <form action="/tickets/1/checkout" method="post" id="payment-form">
      {{ csrf_field() }}
      <div class="form-row">
        <label for="card-element"> Credit or debit card </label>
        <div id="card-element">
          <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display Element errors. -->
        <div id="card-errors" role="alert"></div>
      </div>

      <button class="button-primary">Submit Payment</button>
    </form>

  </div>

  {{-- <div class="container">

    <h3>PURCHASE TICKET</h3>

    <form action="/payments" method="POST" id="payForm">
      {{ csrf_field() }}
      <input type="hidden" name="stripeToken" id="stripeToken" value="stripeToken">
      <input type="hidden" name="stripeEmail" id="stripeEmail" value="stripeEmail">

      <input class="button-primary" id="payButton" type="submit" value="Buy Ticket"/>
    </form>

    <script src="https://checkout.stripe.com/checkout.js"></script>

    <script>
      let stripe = StripeCheckout.configure({
        key: "{{ config('services.stripe.key') }}",
        image: "https://stripe.com/img/documentation/checkout/marketplace.png",
        locale: "auto",
        token: function(token){
          document.querySelector('#stripeEmail').value = token.email;
          document.querySelector('#stripeToken').value = token.id;
          document.querySelector('#payForm').submit();
        }
      });

      document.querySelector('#payButton').addEventListener('click', function(e){
        stripe.open({
          name: 'Event Ticket',
          description: 'Ticket to the event',
          zipCode: true,
          amount: 3500
        });

        e.preventDefault();
      })
    </script>

  </div> --}}

  <script src="{{URL::asset('js/stripe.js')}}"></script>

@endsection
