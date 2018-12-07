<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jizelle Teves</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                z-index: initial;
                color: #FFF;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 134px;
                text-shadow: slategrey;
                padding: 0 15px;
            }

            .links > a {
                color: #FFF;
                padding: 0 20px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .background {
                background-image: url("https://res.cloudinary.com/dgppfa9sm/image/upload/v1544154000/Jizelle/IMG_9858.jpg");
                /* Full height */
                height: 100%; 
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>

        <div name="title" class="flex-center position-ref full-height background">
            <!-- @if (Route::has('login')) -->
                <!-- Nav Bar-->
                <!-- <div class="top-right links"> -->
                    <!-- @auth -->
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                    <!-- @else -->
                        <!-- <a href="{{ route('login') }}">Login</a> -->

                        <!-- @if (Route::has('register')) -->
                            <!-- <a href="{{ route('register') }}">Register</a> -->
                        <!-- @endif -->
                    <!-- @endauth -->
                <!-- </div> -->
            <!-- @endif -->

            <div class="content">
                <div class="title m-b-md">
                    Jizelle Teves
                </div>

                <div class="links">
                    <a href="">Travel Photography</a>
                    <a href="">In My Shoes...</a>
                    <a href="">About Me</a>
                </div>
            </div>
        </div>
        <div name="shoes" class="flex-center position-ref full-height">
            <h3>
                Hello
            </h3>
        </div>
    </body>
</html>
