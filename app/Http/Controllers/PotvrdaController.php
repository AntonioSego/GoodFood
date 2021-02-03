<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotvrdaController extends Controller
{
    public function index()
    {
        return view('potvrda');
    }
}
