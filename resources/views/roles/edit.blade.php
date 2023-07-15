@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Edit Role</h1>

        <div class="card">
    <div class="card-body" style="border-radius: 10px; background-color: maroon">
        <form action="{{ route('roles.update', $role) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" style="color: white;">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="permission" style="color: white;">Permission:</label>
                <input type="text" name="permission" id="permission" style="margin-bottom: 10px;" class="form-control" value="{{ old('permission') }}" required>
                @error('permission')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="background-color: blue;">Update Role</button>
            </div>
        </form>
    </div>
</div>

    </div>
@endsection