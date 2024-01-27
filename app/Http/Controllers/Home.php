<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home(Request $request){

        echo "<pre>";
        print_r($request->toArray());
        exit;
        return view('home');
    }
}
