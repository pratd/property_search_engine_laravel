<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
        <!-- Styles -->
    </head>
    <body>
    @include('includes.header')
        <div class="row center">
            <img src="/img/restHome.png">
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
            <div class="row center">
                <img src="/img/smallIcon.png">
                <p>Find the perfect place</p>
            </div>
        </div>
    <div id="app" class="row center">
        <component-main-home :some='@json($response)'></component-main-home>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
