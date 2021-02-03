<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body class="orderBody">
    <nav class="navbar navbar-expand-md navTraka shadow-sm ">
        <div class="container">
            <a href="/" class="text-light noDec">Pocetna</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a href="{{route('product.shoppingCart')}}" class="nav-link text-light">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>Košarica
                                <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Odjavi se') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-6 orderDiv shadow-lg">
        <div class="text-center">
            <br>
            
            <p>Povratak na izbor <a href="home">restorana</a></p>
            
            <form action="" method="POST">
                {{ csrf_field() }}
                @foreach ($data as $item)
                   <div class="odabir shadow d-inline-block">
                            <img src="{{$item->imgpath}}" alt="" id="slikaJela">
                            <p id="podatciJela">{{$item->jelo}}</p>
                            <p id="podatciJela">{{$item->cijena}}km</p>
                            <a href="{{route('product.addToCart',['idjela' => $item->idjela])}}" class="btn btn-outline-primary" id="jeloBut" role="button">Ubaci</a>
                   </div>
                @endforeach
                
            </form>
        </div>
    </div>
    
</body>
</html>