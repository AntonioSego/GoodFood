<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NarudbaController extends Controller
{
    public function save(Request $req)
    {
        print_r($req->input());
    }
}
