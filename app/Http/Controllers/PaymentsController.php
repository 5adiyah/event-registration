<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\{Stripe, Charge, Customer};

class PaymentsController extends Controller {

    public function home(){
      return view('payments');
    }

    public function store(){

      //Grab the secret API Key from config/services.php
      Stripe::setApiKey(config('services.stripe.secret'));

      //Create a Customer
      $customer = Customer::create([
        'email' => request('stripeEmail'),
        'source' => request('stripeToken')
      ]);

      //Create a Charge
      Charge::create([
        'customer' => $customer->id,
        'amount' => 3500,
        'currency' => 'usd'
      ]);

      return view('payments');
    }


}
