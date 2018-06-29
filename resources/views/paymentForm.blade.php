@extends('layouts.master')

@section('content')

  <div class="container">

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

  </div>

@endsection
