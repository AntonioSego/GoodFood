<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlController extends Controller
{
    public function admin()
    {
        $data = DB::table('orders')->get();
        $users =DB::table('users')->get();
        return view('control',['data' => $data,'users'=>$users]);
    }

}
