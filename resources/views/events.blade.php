@extends('layouts.master')

@section('content')
    <div class="greenBackground">
        <div class="content">
            @foreach ($events as $event)
                <div class="eventContainer">
                    <?php
                        $date = strtotime($event->startDate);
                        $day = date('j  ', $date);
                        $month = date(' M ', $date);
                    ?>

                    <img class="eventImg" src="/storage/{{ $event->imageUrl }}" alt="event image">
                    <p class="eventDate"><?php echo $day; ?></p>
                    <p class="eventDate"><?php echo $month; ?></p>
                    <p class="eventName">{{ $event->title }}</p>
                    <p class="eventName">{{ $event->location }}</p>
                    <a href="/events/{{ $event->id }}"><button class="attendButton">Attend</button></a>
                    <button class="detailsButton">Details</button>
                </div>
            @endforeach
        </div>
    </div>
@endsection