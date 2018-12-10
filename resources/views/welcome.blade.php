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

    <div name="title" class="flex-center position-ref full-height background">
        

        <div class="content">
            <div class="title m-b-md">
                Jizelle Teves
            </div>

            <div class="links">
                <a href="#walking-gallery">In My Shoes</a>
                <a href="#travel-gallery">Travel Photography</a>
                <a href="#about-me">About Me</a>
            </div>
        </div>
    </div>

    @component('preview')
        @slot('id')
            'walking-gallery'
        @endslot
        This is where the walking gallery goes     
    @endcomponent
    @component('preview')
    @slot('id')
            'travel-gallery'
        @endslot
        This is where the travel gallery goes     
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

