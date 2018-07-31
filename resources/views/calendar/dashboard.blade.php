@extends('layouts.master')

@section('content')
    <div class="flex-center full-height">
        <div class="content">
            <div class="title m-b-md">
                Calendar Dashboard Page
            </div>

            <div class="links">
            <a href="/calendar/create">Create Calendar</a>
            <a href="/event/create">Create Event</a>
            <a href="/calendar/sync">Sync Calendar</a>
            <a href="/calendar-events">Events</a>
            <a href="/logout">Logout</a>
            </div>
        </div>
        <div>
@endsection
