<?php

Route::get('/', 'EventsController@home');
Route::get('/events', 'EventsController@index');
Route::get('/events/create', 'EventsController@create');

Route::post('/events', 'EventsController@store');
Route::post('/events/{event}/tickets', 'TicketsController@store');

Route::get('events/{event}', 'EventsController@show');
Route::get('/events/{event}/tickets/{ticket}', 'TicketsController@show');

Route::get('/past-events', 'EventsController@pastEvents');
Route::get('/current-events', 'EventsController@currentEvents');
Route::get('/future-events', 'EventsController@futureEvents');

Route::get('/tickets/{ticket}/buy', 'EventsController@payment');
Route::POST('/tickets/{ticket}/buy', 'OrderController@store'); //and this to same pg

Route::get('/payments', 'PaymentsController@home');
Route::POST('/payments', 'PaymentsController@store');
