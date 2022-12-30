<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('groupRegister');
    }
    public function register(Request $request) {

        $validated = $request->validate([
            'groupName' => 'required|min:3|unique:Groups,groupName',
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
                'confirmed'
            ],
            'binusian' => 'required'
        ],
        [
            'required' => 'The :attribute field is required.',
            'confirmed' => 'The :attribute confirmation is wrong.',
            'regex' => ':attribute wrong format (lowecase, uppercase, number, symbol)',
        ]);

        User::create([
            'groupName' => $request->groupName,
            'password' => Hash::make($request->password),
            'binusian' => $request->binusian,
        ]);

        return redirect('/home') -> with('success', 'Group Successfully Registered');
    }

    public function index () {
        $groups = User::all();
        return view('welcome', compact('groups'));
    }
}
