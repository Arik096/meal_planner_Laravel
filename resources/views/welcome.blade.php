<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

        <!-- Styles -->
        <style>






            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }





            .links > a {
                color: white;
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
    <body>





        <div class="hero">

            
            <div class="navbar">

            @if (Route::has('login'))
                <div class="top-right links">
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

                

            </div>






            <div class="content">

                <h3 style="color:yellow;">Welcome to our....</h3>
                <h1>Hostel <br> Meal Management Website</h1>

            </div>





            <div class="bubbles">

                <img src="{{ asset('images/bubble.png') }}">
                <img src="{{ asset('images/bubble.png') }}">
                <img src="{{ asset('images/bubble.png') }}">
                <img src="{{ asset('images/bubble.png') }}">
                <img src="{{ asset('images/bubble.png') }}">
                <img src="{{ asset('images/bubble.png') }}">
                <img src="{{ asset('images/bubble.png') }}">



            </div>









        </div>































        


    </body>

</html>
