@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Create Role</h1>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="permission">Permission:</label>
                <input type="checkbox" name="permission" id="permission" class="form-control" value="{{ old('permission') }}" required>
                @error('permission')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Role</button>
        </form>
    </div>
@endsection
