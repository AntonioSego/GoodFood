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
       <div class="container-fluid main_container">
                <div class="row">
                    <div class="col-md-6 lijevaTraz padding0">
                        <div class="logo display-inline">
                            <a href=""><img id="logoimg" src="/images/logo.ico" alt="GetFood"></a>
                            <a href="" class="logolink">GetFood</a>
                        </div>
                        <div class="text-left" id="naslovL">
                            <h2>Naruči <span class="pomnaslov"></span></h2>
                            <h2>Za manje od 1 minute!</h2>
                        </div>
                        <div class="input-group srcbox">
                            <form action="restoran" method="POST">
                            <select name="" id="traziBar">
                                <option value="">Restoran</option>
                            @foreach ($podatci as $item)
                                <option value="{{$item->naziv}}">{{$item->naziv}} {{$item->grad}} {{$item->telefon}}</option>
                            @endforeach
                            </select>
                            <!--<input type="submit" name="Trazi" id="traziBut" value="Trazi">-->
                            </form>

                        </div>
                        <p class="text-muted ispod">
                            Za online naruđžbu trebate se <a href="login" class="text-reset">prijavit</a>.
                          </p>
                    </div>
                    <div class="col-md-6 padding0 desnaStr">
                        <a href="register" class="btn btn-dark float-right" id="logbutpoc">Registracija</a>
                        <a href="login" class="btn btn-dark float-right" id="logbutpoc">Prijava</a>
                        <a href="home" class="btn btn-dark float-right" id="logbutpoc">Naruci</a>

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
                <a href="" class="ikone"><img src="/images/faceic.png" alt="" width="64px" height="64px"></a>
                <a href="" class="ikone"><img src="/images/ingic.png" alt="" width="64px" height="64px"></a>
                <a href="" class="ikone"><img src="/images/mailic.png" alt="" width="64px" height="64px"></a>
                <a href="" class="ikone"><img src="/images/telic.png" alt="" width="64px" height="64px"></a>
                <br>
            </div>
            <div class="col-md-6 padding0 display-inline korInfo">
                <br>
                <br>
                <a href="onama" class="linkoviInfo">O nama</a>
                <a href="" class="linkoviInfo">Privilegije</a>
                <a href="https://drive.google.com/file/d/1spAMtIBBtWiN1ji7fnEfqNsIHBgw9HJw/view" class="linkoviInfo">Vizija</a>
                <a href="tehnologije" class="linkoviInfo">Tehnologije</a>
                <a href="control" class="btn btn-light float-right" id="logbutpoc"></a>
            </div>
            <div class="col-md-12 padding0 text-center prava"> <a href="control" class="nista">2021</a> @GetFood Sva prava pridrzana</div>

         </footer>
        </div>
    </body>
</html>
