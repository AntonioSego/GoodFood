@extends('layouts.app')
@section('content')
    @if (Session::has('cart'))
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 bg-light border border-secondary rounded-top border-bottom-0">
                <ul class="list-group">
                    <br>
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['jelo'] }}</strong>
                            <span class="label label-success">{{ $product['price']}}</span>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('product.reduceByOne',['idjela' => $product['item']['idjela']]) }}">Izbaci</a>
                            </div>
                        </li>
                        <br>
                    @endforeach
                </ul>

            </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 bg-light text-center border border-secondary border-top-0 rounded-bottom">
                <strong>Za platiti: {{ $totalPrice }}KM</strong>
                <br>
                <br>
                <form action="{{ route('potvrda.narudbe') }}" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="ukupno" id="" value="{{ $totalPrice }}">
                    <input type="text" name="ime" placeholder="Vaše ime i prezime" class="input-group kasaUnos">
                    <br>
                    <input type="text" name="adresa" placeholder="Adresa" class="input-group kasaUnos">
                    <br>
                    <input type="text" name="telefon" placeholder="Telefon" class="input-group kasaUnos">
                    <br>
                    <hr>
                    <button class="btn btn-primary" type="submit">Naruči</button>
                    <br>
                    <hr>
                </form>
            </div>
        </div>
      </div>
    </div>
        @else
        <div class="container">
         <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 bg-light text-center rounded border border-secondary">
                <br>
                <h2>Nemate jela u košarici</h2>
                <p>Vratite se na izbor restorana,odaberite restoran i naručite iz bogatog menija.</p>
                <hr>
                <a href="home"><button class="btn btn-outline-success">Povratak na izbor restorana</button></a>
                <hr>
                <br>
            </div>
          </div>
    </div>
    @endif

@endsection
