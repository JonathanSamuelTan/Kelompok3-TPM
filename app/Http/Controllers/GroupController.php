<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GroupController extends Controller
{
    public function create() {
        return view('createGroup');
    }

    public function store(Request $request) {

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
        ],
        [
            'required' => 'The :attribute field is required.',
            'confirmed' => 'The :attribute confirmation is wrong.',
            'regex' => ':attribute wrong format (lowecase, uppercase, number, symbol)',
        ]);


        Group::create([
            'groupName' => $request->groupName,
            'password' => Hash::make($request->password),
            'binusian' => $request->binusian,
        ]);

        return redirect('/home');
    }

    public function index () {
        $groups = Group::all();
        return view('welcome', compact('groups'));
    }
}
