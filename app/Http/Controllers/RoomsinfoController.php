<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsinfoController extends Controller
{
    public function roomInfo(Request $request){

        return view('roomsinfo');
    }
}
