<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roomcategoryController extends Controller
{
    public function roomcategoryController(Request $request){
       return view('roomcategory');
    }
}
