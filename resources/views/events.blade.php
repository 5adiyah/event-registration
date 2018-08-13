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
                    <div class="eventImgContainer">
                        <img class="eventImg" src="/storage/{{ $event->imageUrl }}" alt="event image">
                    </div>
                    <div class="eventDetails">
                        <div class="detailsLeft">
                            <p class="eventDay"><?php echo $day; ?></p>
                            <p class="eventMonth"><?php echo $month; ?></p>
                        </div>
                        <div class="detailsRight">
                            <div class="nameAndLocation">
                                <p class="eventName">{{ $event->title }}</p>
                                <p class="eventLocation">{{ $event->location }}</p>
                            </div>
                            <div class="buttons">
                                <a href="/events/{{ $event->id }}"><button class="attendButton">Attend</button></a>
                                <button class="detailsButton">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection