@extends('layouts.master')

@section('content')
  <div class="container">

    <h3>Create An Event</h3>

    <form method="POST" action="/events">
      {{ csrf_field() }}
      <label for="title">Event Name</label>
      <input class="u-full-width" type="text" id="title" name="title">

      <label for="eventStatus">Event Type</label>
      <input class="u-full-width" type="text" id="eventStatus" name="eventStatus">

      {{-- <label for="eventStatus">Event Type</label>
      <select class="u-full-width" id="exampleRecipientInput">
        <option value="past">Past Event</option>
        <option value="current">Current Event</option>
        <option value="future">Future Event</option>
      </select> --}}

      <input class="button-primary" type="submit" value="Submit">

    </form>

  </div>

@endsection
