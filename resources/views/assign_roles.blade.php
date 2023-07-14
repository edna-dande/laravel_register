@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Assign Roles to User</h1>
        
        <form action="{{ route('storeAssignedRoles', $user) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="roles">Select Roles:</label>
                <div class="checkbox-group">
                    @foreach ($roles as $role)
                        <div class="form-check">
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="role_{{ $role->id }}">
                            <label for="role_{{ $role->id }}">{{ $role->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Assign Roles</button>
        </form>
    </div>
@endsection
