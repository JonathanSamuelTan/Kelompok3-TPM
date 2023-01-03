<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;
use Illuminate\Support\Facades\Auth;

class LeaderController extends Controller
{
    public function create()
    {
        return view('createLeader');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'leaderName' => 'required',
            'leaderEmail' => 'required|email',
            'leaderWA' => 'required|numeric|min:10 ',
            'leaderLine' => 'required',
            'leaderGithub' => 'required|url',
            'birthPlace' => 'required',
            'birthDate' => 'required|date',
            'leaderCV' => 'required',
            'leaderFlazz' => 'required',
        ]);

        $extensionCV = $request->file('leaderCV')->getClientOriginalExtension();
        $cv = $request->leaderName . '_CV_' . $extensionCV;
        $request->file('leaderCV')->storeAs('/public/CV', $cv);

        $extensionFlazz = $request->file('leaderFlazz')->getClientOriginalExtension();
        $flazz = $request->leaderName . '_Flazz_' . $extensionFlazz;
        $request->file('leaderFlazz')->storeAs('/public/Flazz', $flazz);

        $group_id = Auth::id();

        Leader::create([
            'leaderName' => $request->leaderName,
            'leaderEmail' => $request->leaderEmail,
            'leaderWA' => $request->leaderWA,
            'leaderLine' => $request->leaderLine,
            'leaderGithub' => $request->leaderGithub,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'leaderCV' => $cv,
            'leaderFlazz' => $flazz,
            'group_id' => $group_id
        ]);
        return redirect('/home');
    }

    public function show($id)
    {
        $leader = Leader::findOrFail($id);
        return view('leaderDetail', compact('leader'));
    }
}
