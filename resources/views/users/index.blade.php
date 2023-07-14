@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">Users</h1>

        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create User</a>

        <div class="card">
            <div class="card-body" style="border-radius: 10px; background-color: maroon">
                @foreach ($users as $user)
                    <div class="card" style="margin-bottom: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Id: {{ $user->id }}</h5>
                            <p class="card-text">Name: {{ $user->name }}</p>
                            <p class="card-text">Email: {{ $user->email }}</p>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" style="background-color: red;" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
