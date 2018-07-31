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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(
    ['middleware' => ['admin']],

    function(){
        Route::get('/dashboard', 'CalendarsController@index');
        Route::get('/calendar/create', 'CalendarsController@createCalendar');
        Route::post('/calendar/create', 'CalendarsController@doCreateCalendar');

        Route::get('/event/create', 'CalendarsController@createEvent');
        Route::post('/event/create', 'CalendarsController@doCreateEvent');

        Route::get('/calendar/sync', 'CalendarsController@syncCalendar');
        Route::post('/calendar/sync', 'CalendarsController@doSyncCalendar');

        Route::get('/calendar-events', 'CalendarsController@listEvents');

        Route::get('/logout', 'CalendarsController@logout');
    }
);

Route::get('/login', 'EventsController@login');
