<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Leader;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userDashboardController extends Controller
{
    public function show(){
        $id = Auth::id();
        $user = User::find($id);
        $leader = Leader::where('group_id', $id)->first();
        $member = Member::where('group_id', $id)->get();
        return view('dashboard', compact('user', 'leader', 'member'));
    }
}
