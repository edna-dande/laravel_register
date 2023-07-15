@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Roles</h1>

{{--         @can('role-create') --}}
        <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Create Role</a>
{{--         @endcan --}}

        <div class="card">
    <div class="card-body" style="border-radius: 10px; background-color: maroon">
        @foreach ($roles as $role)
            <div class="card" style="margin-bottom: 15px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $role->name }}</h5>
                    <p class="card-text">ID: {{ $role->id }}</p>
                    <a href="{{ route('roles.show', $role) }}" class="btn btn-info btn-sm">View</a>
{{--                     @can('role-edit') --}}
                    <a href="{{ route('roles.edit', $role) }}" class="btn btn-primary btn-sm">Edit</a>
{{--                     @endcan --}}
                    <form action="{{ route('roles.destroy', $role) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
{{--                         @can('role-delete') --}}
                        <button type="submit" class="btn btn-danger btn-sm" style="background-color: red;" onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
{{--                         @endcan --}}
                    </form>
                </div>
            </div>
        @endforeach
    </div>
  </div>
    </div>
@endsection
