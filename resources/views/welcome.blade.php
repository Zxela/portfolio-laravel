<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jizelle Teves</title>

</head>

<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel position-abs">
        <div class="container">
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul> --}}
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="links" href="#walking-gallery">In My Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="links" href="#travel-gallery">Travel Photography</a>
                    </li>
                    <li class="nav-item">
                        <a class="links" href="#about-me">About Me</a> 
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            </form>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <div name="title" class="flex-center position-ref full-height title-background">
          
        <div class="content">
            <div class="title m-b-md">
                Jizelle Teves
            </div>

            {{-- <div class="links">
                <a href="#walking-gallery">In My Shoes</a>
                <a href="#travel-gallery">Travel Photography</a>
                <a href="#about-me">About Me</a>
            </div> --}}
        </div>
    </div>

    @component('preview')
    @slot('id')
    'walking-gallery'
    @endslot
    <a href="{{ url("/walking") }}">In My Shoes</a>
    @endcomponent
    @component('preview')
    @slot('id')
    'travel-gallery'
    @endslot
    <a href="{{ url("/travel") }}">Travel</a>
    @endcomponent
    @component('preview')
    @slot('id')
    'about-me'
    @endslot
    This is where the about me goes
    @endcomponent

</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="{{ asset('js/welcome.js') }}"></script>

</html>
