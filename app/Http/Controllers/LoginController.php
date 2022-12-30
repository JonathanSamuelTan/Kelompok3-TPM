<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create() {
        return view('groupLogin');
    }
    public function login(Request $request) {
        if (Auth::attempt($request -> only('groupName', 'password'))) {
            return redirect('/home');
        };

        return back() -> with('error', 'Wrong Credentials');
    }

}



