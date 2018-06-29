@extends('layouts.master')

@section('content')
  <div class="flex-center full-height">
    <div class="content">
        <div class="title m-b-md">
            Event Registration
        </div>

        <div class="links">
            <a href="events">View Events</a>
            <a href="#">View Calendar</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
  <div>
@endsection


@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>PURCHASE TICKET</h3>

    <form id="payForm" action="/payments" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="stripeToken" value="stripeToken">
      <input type="hidden" name="stripeEmail" value="stripeEmail">

      <input class="button-primary" id="payButton" type="submit" value="Buy Ticket"/>
    </form>

    <script src="https://checkout.stripe.com/checkout.js"></script>

    <script>
      let stripe = StripeCheckout.configure({
        key: "{{ config('services.stripe.key') }}",
        image: "https://stripe.com/img/documentation/checkout/marketplace.png",
        locale: "auto",
        token: function(token) {
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
          amount: 2500
        });

        e.preventDefault(); //to stop form from trying to submit before fields are filled out
      });

    </script>

  </div>

@endsection
