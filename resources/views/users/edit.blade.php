@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Edit User</h1>

        <div class="card">
    <div class="card-body" style="border-radius: 10px; background-color: maroon">
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" style="color: white;">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" style="color: white;">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" style="color: white;">New Password:</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation" style="color: white;">Confirm New Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                @error('form_group')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="role" style="color: white;">Role:</label>
                <input type="text" name="role" id="role" style="margin-bottom: 10px;" class="form-control" multiple required>
                @error('role')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: blue;">Update User</button>
        </form>
    </div>
</div>

    </div>
@endsection
