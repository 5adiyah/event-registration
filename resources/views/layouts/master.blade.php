<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Site</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css"> --}}
    <link href="{{URL::asset('css/skeleton.css')}}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{URL::asset('css/stripe.css')}}" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
    <script>window.stripeKey = '{{ config('services.stripe.key') }}';</script>
  </head>
  <body>
    <div class="navigation">
      <img class="siteLogo" src="{{URL::asset('images/logo.png')}}" alt="">
      <ul>
        <a href="past-events"><li>PAST EVENTS</li></a>
        <a href="current-events"><li>CURRENT EVENTS</li></a>
        <a href="future-events"><li>FUTURE EVENTS</li></a>
      </ul>
    </div>
      @yield('content')

  </body>
</html>
