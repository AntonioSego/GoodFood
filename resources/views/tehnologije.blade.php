<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container justify-content-center">
            <div>
                <img src="{{ asset('/images/laravelbc.jpg') }}" alt="" width="500px" height="300px">
            </div>
            <div>
                <img src="{{ asset('/images/bootstrapbc.gif') }}" alt="" width="500px" height="300px" >
            </div>
            <div>
                <img src="{{ asset('/images/hmlbc.png') }}" alt="" width="500px" height="300px">
            </div>
            <div>
                <img src="{{ asset('/images/mysqlbc.jpg') }}" alt="" width="500px" height="300px">
            </div>

        </div>
    </body>
</html>
