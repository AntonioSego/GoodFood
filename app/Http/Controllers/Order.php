<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menurestorana;
use App\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class Order extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function index(Request $request)
    {
        $resid = $request->idres;
        $data = DB::table('restoranis')->join('menurestoranas','restoranID','=','idrestorana')->where('restoranID','=',$resid)->get();
        return view('order',['data'=>$data]);
    }

    public function getAddToCart(Request $request,$idjela){

        $product = Menurestorana::find($idjela);
    
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->idjela);

        $request->session()->put('cart',$cart);
        return redirect()->route('home'); 
    }

    public function getCart()
    {
        if(!Session::has('cart')){
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart',['products' => $cart->items,'totalPrice' => $cart->totalPrice]);
    }

    public function checkout(Request $request)
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->cart = serialize($cart);
        $order->name = $request->input('ime');
        $order->adress = $request->input('adresa');
        $order->tel = $request->input('telefon');
        $order->sum = $request->input('ukupno');
        DB::table('orders')->insert([
            'jela' => $order->cart,
            'cijena' => $order->sum ,
            'ime' => $order->name,
            'adresa' => $order->adress,
            'telefon' => $order->tel
        ]);
        return view('potvrda');
    }

}
