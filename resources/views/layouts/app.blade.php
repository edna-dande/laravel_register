<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        

        <title>Cytonn Register</title>
  
        <!-- Scripts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    </head>
    <body class="font-sans antialiased">
        <div >
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
              
            </header>

                        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <a class="navbar-brand" href="/">Cytonn Register</a>
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}" style="margin-right: 10px;">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}" style="margin-right: 10px;">Manage Roles</a></li>
                            <li><a class="nav-link" href="{{ route('events.index') }}" style="margin-right: 10px;">Manage Events</a></li>
                            <li class="nav-item dropdown">
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>


                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/create">New User</a>
                    </li>
                    </ul>
                </div> -->
            </nav>
        </div>

        <div id="app" style="margin: 20px;">
            @yield('content')
        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
