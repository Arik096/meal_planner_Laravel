<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        


    </head>
    <body>





        <div class="hero">

            







            <div class="content">


            @yield('bubble')


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
