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
<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm bg-success">
            <div class="container">
                <h3 class="text-light">Upravljacki UI</h3>
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
                                <a class="nav-link text-light noDec" href="{{ route('login') }}">{{ __('Prijava') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light noDec" href="{{ route('register') }}">{{ __('Registracija') }}</a>
                                </li>
                            @endif
                        @else
                        
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
                                    @can('manage-users')
                                        <a class="dropdown-item" href="/">
                                            Povratak na pocetnu
                                        </a>
                                    @endcan

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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Korisnici') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ime</th>
                            <th scope="col">Email</th>
                            <th scope="col">Uloga</th>
                            <th scope="col">Uradi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                             <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <th scope="row">{{ $user->name }}</th>
                                <th scope="row">{{ $user->email }}</th>
                                <th scope="row">{{implode(', ',$user->roles()->get()->pluck('name')->toArray()) }}</th>
                                <th scope="row">
                                    @can('edit-users')
                                        <a href="{{ route('admin.users.edit',$user->id) }}"><button type="button" class="btn btn-primary float-left">Uredi</button></a>
                                    @endcan
                                    @can('delete-users')
                                        <form action="{{ route('admin.users.destroy',$user) }}" method="POST" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-warning">Obrisi</button></a>
                                        </form>
                                    @endcan
                                </th>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Popis restorana i naruđžba
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <h4>Restorani</h4>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Naziv</th>
                            <th scope="col">Grad</th>
                            <th scope="col">Adresa</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($restorani as $restoran)
                             <tr>
                                <th scope="row">{{ $restoran->idrestorana }}</th>
                                <th scope="row">{{ $restoran->naziv }}</th>
                                <th scope="row">{{ $restoran->grad }}</th>
                                <th scope="row">{{ $restoran->adresa }}</th>
                                <th scope="row">
                                    
                                </th>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <h4>Naruđžbe</h4>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cijena</th>
                            <th scope="col">Ime</th>
                            <th scope="col">Adresa</th>
                            <th scope="col">Telefon</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                             <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <th scope="row">{{ $order->cijena }}</th>
                                <th scope="row">{{ $order->ime }}</th>
                                <th scope="row">{{ $order->adresa}}</th>
                                <th scope="row">{{ $restoran->telefon }}</th>
                                <th scope="row">
                                    
                                </th>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
    
</div>
</div>
</body>
</html>