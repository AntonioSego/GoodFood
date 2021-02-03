<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $podatci = DB::table('restoranis')->orderBy('grad')->get();
        return view('welcome',['podatci'=>$podatci]);
    }
    public function tech()
    {
        return view('tehnologije');
    }
}
