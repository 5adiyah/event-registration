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

      <label for="startDate">Start Date</label>
      <input class="u-full-width" type="text" id="startDate" name="startDate">

      <label for="endDate">End Date</label>
      <input class="u-full-width" type="text" id="endDate" name="endDate">

      <label for="location">Event Location</label>
      <input class="u-full-width" type="text" id="location" name="location">

      <label for="imageUrl">Event Flyer</label>
      <input class="u-full-width" type="text" id="imageUrl" name="imageUrl">

      <label for="description">Event Description</label>
      <textarea name="description" id="description" rows="20" class="u-full-width"></textarea>

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
