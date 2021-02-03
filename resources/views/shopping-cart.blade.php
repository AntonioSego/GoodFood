@extends('layouts.app')
@section('content')
    @if (Session::has('cart'))
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 bg-light">
                <ul class="list-group">
                    <br>
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['jelo'] }}</strong>
                            <span class="label label-success">{{ $product['price']}}</span>
                            <div class="btn-group">
                                <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Izbaci jedan</a></li>
                                        <li><a href="">Izbaci sve</a></li>
                                    </ul>
                                </button>

                            </div>
                        </li>
                        <br>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 bg-light text-center">
                <strong>Za platiti: {{ $totalPrice }}KM</strong>
                <br>
                <br>
                <form action="{{ route('potvrda.narudbe') }}" method="post">
                    {{ csrf_field() }}
                    
                    <input type="hidden" name="ukupno" id="" value="{{ $totalPrice }}">
                    <input type="text" name="ime" placeholder="Vase ime i prezime" class="input-group kasaUnos">
                    <br>
                    <input type="text" name="adresa" placeholder="Adresa" class="input-group kasaUnos">
                    <br>
                    <input type="text" name="telefon" placeholder="Telefon" class="input-group kasaUnos">
                    <br>
                    <hr>
                    <button class="btn btn-primary" type="submit">Naruci</button>
                    <br>
                    <hr>
                </form>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <h2>Nemate jela u kosarici</h2>
            </div>
        
    @endif

@endsection