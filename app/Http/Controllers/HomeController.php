<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function SayHello(Request $request){
        $nama = $request->nama;

        return "<h1>hello</h1>";
    }
}
