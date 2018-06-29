#NOTES ON LEARNING LARAVEL

**What I've Done So Far:**
  - Install LARAVEL
  - `php artisan serve` to create local dev server
  - Create Application key
  - Learn Directory Structure
  - *FAIL* Attempted to use Homestead
    - Missing a program that computer wont let me download
    - Vagrant Box
  - *FAIL* Attempted to use Valet
    - No idea about this one
  - Learn Basic Routing and Views
  - Set up Database and Tables
  - Pass data to my Views
  - Use Query Builder to access and query Database
  - Use Eloquent 101 instead of Query Builder for **Active Record Implementation**
  - Create a Controller
  - Move application logic out of the route and into the Controller
  - Use Route Model Binding to access instances of an Event
  - Create a layouts file and connect to other layouts plus css file
  - When creating forms, you have to add `{{ csrf_field() }}` to protect your data

**ECOMMERCE - STRIPE:**
  - Add the checkout form to templates
  - Create a Payments Controller
  - Composer require stripe/stripe-php
  - Set your api key
    - Grab api key from stripe dashboard
    - In your env file add a `STRIPE_KEY` and `STRIPE_KEY`
    - grab it by `config('services.stripe.key')` --> config, give me the services file, and the stripe key
    - in the form, inside of data-key change to `{{ config('services.stripe.key') }}`
  - Create a customer in Payments Controller
  - Charge their card in Payments Controller

**BUGS**

  - Valet returns unknown host
    - *FIX* - None so Far

  - `php artisan migrate` --> Cannot declare class CreateEventsTable, because the name is already in use
    - *FIX* - ^C and run `php artisan migrate:refresh`

  - `php artisan migrate` --> SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) (SQL: select * from information_schema.tables where table_schema = registrationapp and table_name = migrations)
    - *FIX* - Delete migration file and run `php artisan migrate`

  - Css not showing up --> `<link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">`

**Debugging**

  - `dd(request()->all());` kind of like console.log

**What the heck is that?**
  - *csrf_field* - cross site request forgery, type of malicious exploit where unauthorized commands are preformed on behalf of the user, Laravel makes you use a `csrf_field` inside of your forms to protect you from that
  - *migrations* - they're like version control for your database, it makes it easy to modify your database schema.

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
