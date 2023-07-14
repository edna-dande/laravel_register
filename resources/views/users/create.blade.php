@extends('layouts.app')

@section('content')
{{ isset($errors) ? $errors : ''}}
    <div class="container">
        <h1 style="font-size: 25px;">Create User</h1>

        <div class="card">
            <div class="card-body" style="border-radius: 10px; background-color: maroon">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name" style="color: white;">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" style="color: white;">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" style="color: white;">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" style="color: white;">Confirm Password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" required>
                        @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="roles" style="color: white;">Role:</label>
                        <select name="roles" id="roles" class="form-control" value="{{ old('role') }}" multiple required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: blue;">Create User</button>
                </form>
            </div>
    </div>
    </div>
@endsection
