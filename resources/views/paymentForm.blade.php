@extends('layouts.master')

@section('content')

  <div class="container">

    <h3>PURCHASE TICKET</h3>

    <form action="/payments" method="POST">
      {{ csrf_field() }}
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ config('services.stripe.key') }}"
        data-amount="2500"
        data-name="Event Ticket"
        data-description="Buy and event ticket"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto">
      </script>
    </form>



  </div>

@endsection
