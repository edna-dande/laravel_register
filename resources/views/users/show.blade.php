@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">User Details</h1>

        <div class="card">
            <div class="card-header">
                <h5>{{ $user->name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Roles:</strong> {{ $user->role }}</p>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
                <p><strong>Created At:</strong> {{ $user->created_at }}</p>
                <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
                 
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="background-color: red;" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
            </div>
        </div>
       
    </div>
@endsection
