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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
       <div class="container-fluid main_container">
                <div class="row">
                    <div class="col-md-6 lijevaTraz padding0">
                        <div class="logo display-inline shadow">
                            <a href=""><img id="logoimg" src="{{ asset('/images/logo.ico') }}" alt="GetFood"></a>
                            <a href="" class="logolink">GetFood</a>
                        </div>
                        <div class="text-center" id="naslovL">
                            <br>
                            <br>
                            <h2>Naruči <span class="pomnaslov"></span></h2>
                            <h2>Za manje od 1 minute!</h2>
                            <br>
                        </div>
                        <div class="text-center">
                            <p>
                                <button class="btn btn-outline-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Restorani
                                </button>
                            </p>
                                <div class="collapse " id="collapseExample">
                                    <div class="card card-body bg-light">
                                        <div class="row">
                                            @foreach ($podatci as $item)
                                                <div class="text-left col-md-4" id="restoraniColapse">

                                                    <ul class="list-group">
                                                        <li class="list-group-item list-group-item-danger">{{$item->naziv}}</li>
                                                        <li class="list-group-item">{{$item->grad}}</li>
                                                        <li class="list-group-item">{{$item->adresa}}</li>
                                                        <li class="list-group-item">{{$item->telefon}}</li>
                                                    </ul>

                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted ">
                                    Za online naruđžbu trebate se <a href="login" class="text-primary">prijavit</a>.
                                  </p>
                        </div>
                    </div>
                    <div class="col-md-6 padding0 desnaStr">
                        <a href="register" class="btn btn-outline-dark float-right" id="logbutpoc">Registracija</a>
                        <a href="login" class="btn btn-outline-dark float-right" id="logbutpoc">Prijava</a>
                        <a href="home" class="btn btn-outline-dark float-right" id="logbutpoc">Naruci</a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 padding0 lijevaSlika">

                    </div>
                    <div class="col-md-6 padding0 desniDiv">
                        <p id="desnidiv">Je li kava možda najvažnija za uspješan početak vašeg dana? Jeste li propustili
                            dobru tjesteninu, ali danas niste raspoloženi za kuhanje? Možda je došlo pravo vrijeme
                            da probate hranu u tom meksičkom restoranu?
                            Za što god ste raspoloženi, to možete pronaći kod nas! </p>
                    </div>
                </div>

         <footer class="row">
            <div class="col-md-6 padding0 display-inline korInfo">
                <br>
                <a href="" class="ikone"><img src="/images/logo.ico" alt="" width="64px" height="64px"></a>
                <a href="https://hr-hr.facebook.com/" class="ikone"><img src="/images/faceic.png" alt="" width="64px" height="64px"></a>
                <a href="https://www.instagram.com/" class="ikone"><img src="/images/ingic.png" alt="" width="64px" height="64px"></a>
                <a href="https://hr.wikipedia.org/wiki/Gmail" class="ikone"><img src="/images/mailic.png" alt="" width="64px" height="64px"></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="ikone"><img src="/images/youtubeico.png" alt="" width="64px" height="64px"></a>
                <br>
            </div>
            <div class="col-md-6 padding0 display-inline korInfo">
                <br>
                <br>
                <a href="onama" class="linkoviInfo">O nama</a>
                <a href="" class="linkoviInfo">Prijavi restoran</a>
                <a href="https://drive.google.com/file/d/1spAMtIBBtWiN1ji7fnEfqNsIHBgw9HJw/view" class="linkoviInfo">Vizija</a>
                <a href="tehnologije" class="linkoviInfo">Tehnologije</a>
            </div>
            <div class="col-md-12 padding0 text-center prava"> 2021 @GetFood Sva prava pridrzana</div>

         </footer>
        </div>
    </body>
</html>
