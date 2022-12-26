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

        Group::create([
            'groupName' => $request->groupName,
            'password' => Hash::make($request->password),
            'binusian' => $request->binusian,
        ]);

        return redirect('/home');
    }
}
