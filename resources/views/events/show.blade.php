@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">{{ $event->name }}</h1>

        <div class="card mb-3">
            <div class="card-body" style="border-radius: 10px; background-color: maroon">
                <h5 class="card-title">Event Details</h5>

                <ul class="list-group">
                    <li class="list-group-item border-0"><strong>Name:</strong> {{ $event->name }}</li>
                    <li class="list-group-item border-0"><strong>Frequency:</strong> {{ $event->frequency }}</li>
                    <li class="list-group-item border-0"><strong>Owner:</strong> {{ $event->owner }}</li>
                    <li class="list-group-item border-0"><strong>Attendees:</strong> {{ $event->attendees }}</li>
                    <li class="list-group-item border-0"><strong>Category:</strong> {{ $event->category }}</li>
                    <li class="list-group-item border-0"><strong>Start Date:</strong> {{ $event->start_date }}</li>
                    <li class="list-group-item border-0"><strong>Lead Date:</strong> {{ $event->lead_date }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
    </div>
@endsection
