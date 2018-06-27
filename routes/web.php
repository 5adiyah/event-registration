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

// Route::get('/events', function() {
//
//   $events = App\Event::all();
//
//   return view('events.index', compact('events'));
// });
//
// Route::get('/events/{event}', function($id) {
//
//   $event = App\Event::find($id);
//
//   return view('events.show', compact('event'));
// });

Route::get('/past-events', function() {

  $events = App\Event::PastEvent()->get();

  return view('events.pastEvents', compact('events'));
});

Route::get('/current-events', function() {

  $events = App\Event::CurrentEvent()->get();

  return view('events.currentEvents', compact('events'));
});

Route::get('/future-events', function() {

  $events = App\Event::FutureEvent()->get();

  return view('events.futureEvents', compact('events'));
});

Route::get('/events/{event}', function($id) {

  $event = App\Event::find($id);

  return view('events.show', compact('event'));
});
