<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Event Reminder</title>
</head>
<body>
    <h1 style="font-size: 25px;">Event Reminder: {{ $event->name }}</h1>
    
    <p>Event Date: {{ $event->start_date }}</p>
    
    <p>Lead Date: {{ $event->lead_date }}</p>
    
    <p>Event Owner: {{ $event->owner->name }}</p>
    
    <p>Attendees:</p>
    <ul>
        @foreach ($event->attendees as $attendee)
            <li>{{ $attendee->name }}</li>
        @endforeach
    </ul>
    
    <p>
        Click <a href="{{ route('events.show', $event->id) }}">here</a> to view event details.
    </p>
</body>
</html>
