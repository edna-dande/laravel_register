@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Create Role</h1>

        <div class="card">
    <div class="card-body" style="border-radius: 10px; background-color: maroon">
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name" style="color: white;">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="permission" style="color: white;">Permission:</label>
                <input type="checkbox" name="permission" id="permission" class="form-control" value="{{ old('permission') }}" required>
                @error('permission')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: blue;">Create Role</button>
        </form>
    </div>
</div>

    </div>
@endsection
