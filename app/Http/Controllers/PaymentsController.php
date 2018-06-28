<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
  public function home(){
    return view('payments');
  }

  //Perform the charge
  public function store(){
    dd(request()->all());
  }
}
