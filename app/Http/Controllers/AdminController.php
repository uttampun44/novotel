<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    protected function adminView(Request $request, $users)
{
    dd($users);

    if ($users->name === 'Admin') {
        return view('admin.dashboard');
    }

    return redirect()->route('user.dashboard');
     }
}
