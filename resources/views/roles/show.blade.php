@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="font-size: 25px;">{{ $role->name }}</h1>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Permissions</h5>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                    @endforeach
                @endif
            </div>
        </div>

        <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
    </div>
@endsection
