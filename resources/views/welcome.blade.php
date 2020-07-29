<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ReachMe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
        />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #282C34;
                color: #61DAFB;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body onload="typeWriter()">
        <div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links" >
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md swing-top-fwd">
                    ReachMe
                </div>


                <p  id="demo"></p>

                <script>
                    var i = 0;
                    var txt = 'Hello everyone! This is social media platform, Built on php framework Laravel by brainiaaac';
                    var speed = 50;

                    function typeWriter() {
                        if (i < txt.length) {
                            document.getElementById("demo").innerHTML += txt.charAt(i);
                            i++;
                            setTimeout(typeWriter, speed);
                        }
                    }
                </script>

            </div>
        </div>
    </body>
</html>
