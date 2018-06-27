<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/events', 'EventsController@index');
Route::get('events/{event}', 'EventsController@show');
Route::get('/past-events', 'EventsController@pastEvents');
Route::get('/current-events', 'EventsController@currentEvents');

Route::get('/current-events', function() {

  $events = App\Event::CurrentEvent()->get();

  return view('events.currentEvents', compact('events'));
});

Route::get('/future-events', function() {

  $events = App\Event::FutureEvent()->get();

  return view('events.futureEvents', compact('events'));
});
