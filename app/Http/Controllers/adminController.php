<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leader;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //display all users
    public function index()
    {
        $users = User::all();
        return view('adminDashboard', compact('users'));
    }

    //get spesific data from each user
    public function show($id)
    {
        $user = User::find($id);
        $leader = Leader::where('group_id', $id)->first();
        //get all member who has the same group id
        $member = Member::where('group_id', $id)->get();
        // return view('groupDetail', compact('user'), compact('leader'), compact('member'));
        return view('groupDetail', compact('user', 'leader', 'member'));
    }

    public function delete($id)
    {
        User::where("id", $id)->delete();

        return redirect('/admin-dashboard');
    }

    public function verify($id)
    {
        $user = User::find($id);

        $user->update(['verified' => true]);

        return redirect('/admin-dashboard')->with('Success', 'User Verified');
    }
}
