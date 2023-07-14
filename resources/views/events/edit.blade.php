<!-- resources/views/events/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Edit Event</h1>

        <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $event->name) }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group" style="margin-bottom: 9px;">
                <label for="frequency">Frequency</label>
                <select name="frequency" id="frequency" class="form-control">
                    <option value="one_time" {{ old('frequency', $event->frequency) === 'one_time' ? 'selected' : '' }}>One Time</option>
                    <option value="hourly" {{ old('frequency', $event->frequency) === 'hourly' ? 'selected' : '' }}>Hourly</option>
                    <option value="daily" {{ old('frequency', $event->frequency) === 'daily' ? 'selected' : '' }}>Daily</option>
                    <option value="weekly" {{ old('frequency', $event->frequency) === 'weekly' ? 'selected' : '' }}>Weekly</option>
                    <option value="biweekly" {{ old('frequency', $event->frequency) === 'biweekly' ? 'selected' : '' }}>Biweekly</option>
                    <option value="monthly" {{ old('frequency', $event->frequency) === 'monthly' ? 'selected' : '' }}>Monthly</option>
                    <option value="bimonthly" {{ old('frequency', $event->frequency) === 'bimonthly' ? 'selected' : '' }}>Bimonthly</option>
                    <option value="annually" {{ old('frequency', $event->frequency) === 'annually' ? 'selected' : '' }}>Annually</option>
                </select>
                @error('frequency')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="event_banner" >Event Banner</label>
                <input type="file" name="event_banner" id="event_banner" class="form-control-file">
                @error('event_banner')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <div class="form-group">
                <label for="owner">Owner</label>
                <input type="text" name="owner" id="owner" class="form-control" value="{{ old('owner', $event->owner) }}">
                @error('owner')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="attendees">Attendees</label>
                <input type="text" name="attendees" id="attendees" class="form-control" value="{{ old('attendees', $event->attendees) }}">
                @error('attendees')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $event->category) }}" style="margin-bottom: 25px;">
                @error('category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" style="background-color: blue;">Update</button>
                <a href="{{ route('events.show', $event) }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
