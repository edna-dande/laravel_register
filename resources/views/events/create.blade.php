@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Create Event</h1>

        <div class="card">
    <div class="card-body" style="border-radius: 10px; background-color: maroon">
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name" style="color: white;">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group" style="margin-bottom: 9px;">
                <label for="frequency" style="color: white;">Frequency</label>
                <select name="frequency" id="frequency" class="form-control">
                    <option value="one_time">One Time</option>
                    <option value="hourly">Hourly</option>
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="biweekly">Biweekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="bimonthly">Bimonthly</option>
                    <option value="annually">Annually</option>
                </select>
                @error('frequency')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="event_banner" style="color: white;">Event Banner</label>
                <input type="file" name="event_banner" id="event_banner" class="form-control-file">
                @error('event_banner')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="owner" style="color: white;">Owner</label>
                <input type="text" name="owner" id="owner" class="form-control" value="{{ old('owner') }}">
                @error('owner')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
            <label for="attendees" style="color: white;">Attendees</label> <br>
                @foreach ($users as $user)
                    <label for="{{ 'attendees'.$user->id }}" style="color: white;">
                        {{ $user->name }}
                    </label>
                    <input type="checkbox" name="attendees" id="{{ 'attendees'.$user->id }}" class="form-control" value="{{ old('attendees') }}">
                    <br>
                @endforeach
                @error('attendees')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="lead_date" style="color: white;">Lead Date:</label>
                <input type="date" name="lead_date" id="lead_date" class="form-control">
            </div>

            <div class="form-group">
                <label for="category" style="color: white;">Category</label>
                <input type="text" name="category" id="category" class="form-control" style="margin-bottom: 10px;" value="{{ old('category') }}">
                @error('category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="background-color: blue;">Create</button>
                <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

    </div>
@endsection
