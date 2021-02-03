@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header headerlist text-center">{{ __('Odabir restorana') }}</div>

                <div class="card-body text-center" style="color: #c1502e">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Izaberite jedan od naših partnerskih restorana') }}
                </div>
                    <div class="col-md-12 text-center div1 ">
                        
                        <div class="col-md-6 float-left pizzeria">
                        </div>
                        <div class="col-md-6 float-left">
                            <h3>Pizzeria Aurelian</h3>

                            <br>
                            <p>Široki Brijeg Trn 11</p>
                            <p>063-221-444/aurelian@gmail.com</p>
                            <form action="{{ route('order.menu') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="idres" value="{{$podatci[1]->idrestorana}}">
                                <input type="submit" value="Naruci" class="buttondiv1">
                            </form>
                        </div>
                    </div> 
<!--onclick="location.href='{{ url('order') }}'"-->
                    <div class="col-md-12 text-center div2">
                        <div class="col-md-6 float-left">
                            <h3>Fast food Kamic</h3>
                            <br>
                            <p>Posušje Centar 1</p>
                            <p>063-431-984/kamic@gmail.com</p>
                            <form action="{{ route('order.menu') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="idres" value="{{$podatci[2]->idrestorana}}">
                                <input type="submit" value="Naruci" class="buttondiv2">
                            </form>
                
                        </div>
                        <div class="col-md-6 float-left fastfood">
                            
                        </div>
                    </div> 

                    <div class="col-md-12 text-center div1">
                        <div class="col-md-6 float-left kavana">
                            
                        </div>
                        <div class="col-md-6 float-left">
                            <h3>Coffe Brasilia</h3>
                            {{$podatci[1]->naziv}}
                            <br>
                            <p>Grude A.B Šimica 2</p>
                            <p>063-211-313/brasilia@gmail.com</p>
                            <form action="{{ route('order.menu') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="idres" value="{{$podatci[0]->idrestorana}}">
                                <input type="submit" value="Naruci" class="buttondiv1">
                            </form>
                        </div>
                    </div> 

                    <div class="col-md-12 text-center div2">
                        <div class="col-md-6 float-left">
                            <h3>Restoran Pinjur</h3>
                            <br>
                            <p>Tomislavgrad Stjepana Radića 14</p>
                            <p>063-433-965/pinjur@gmail.com</p>
                            <button class="buttondiv2">Naruci</button>
                        </div>
                        <div class="col-md-6 float-left restoranPinjur">
                            
                        </div>
                    </div>

                    <div class="col-md-12 text-center div1">
                        <div class="col-md-6 float-left krofnara">
                            
                        </div>
                        <div class="col-md-6 float-left">
                            <h3>Slastičarna Koko</h3>
                            <br>
                            <p>Mostar A.B Rondo</p>
                            <p>063-256-139/koko@gmail.com</p>
                            <button class="buttondiv1">Naruci</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
