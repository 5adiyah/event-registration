<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Past Events:</h1>

    @foreach ($events as $event)
      <li>{{ $event->title }}</li>
    @endforeach

  </body>
</html>
