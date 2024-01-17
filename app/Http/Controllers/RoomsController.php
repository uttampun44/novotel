<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{

    public function Rooms(Request $request){
        return view('rooms');
    }
}
