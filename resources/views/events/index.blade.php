@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Events</h1>

{{--        @can('event-create')--}}
        <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Create Event</a>
{{--        @endcan--}}

        <div class="card">
            <div class="card-body" style="border-radius: 10px; background-color: maroon">
                @foreach ($events as $event)
                    <div class="card" style="margin-bottom: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">Frequency: {{ $event->frequency }}</p>
                            <p class="card-text">Owner: {{ $event->owner }}</p>
                            <a href="{{ route('events.show', $event) }}" class="btn btn-info btn-sm">View</a>
{{--                            @can('event-edit') --}}
                            <a href="{{ route('events.edit', $event) }}" class="btn btn-primary btn-sm">Edit</a>
{{--                             @endcan --}}
                            <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
{{--                                 @can('event-delete') --}}
                                <button  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
{{--                                 @endcan --}}
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
