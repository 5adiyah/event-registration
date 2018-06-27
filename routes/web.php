<?php

Route::get('/', 'EventsController@home');
Route::get('/events', 'EventsController@index');
Route::get('/events/create', 'EventsController@create');

Route::get('events/{event}', 'EventsController@show');

Route::get('/past-events', 'EventsController@pastEvents');
Route::get('/current-events', 'EventsController@currentEvents');
Route::get('/future-events', 'EventsController@futureEvents');

Route::post('/events', 'EventsController@store');
