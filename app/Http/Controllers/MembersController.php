<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class MembersController extends Controller
{
    public function create()
    {
        $group_id = Auth::id();
        $member = Member::where('group_id', $group_id)->get();
        if (count($member) >= 3) {
            return redirect('dashboard');
        } else {
            return view('registMember');
        }
    }

    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'leaderName' => 'required',
        //     'leaderEmail' => 'required|email',
        //     'leaderWA' => 'required|numeric|min:10 ',
        //     'leaderLine' => 'required',
        //     'leaderGithub' => 'required|url',
        //     'birthPlace' => 'required',
        //     'birthDate' => 'required|date',
        //     'leaderCV' => 'required',
        //     'leaderFlazz' => 'required',
        // ]);

        // $extensionCV = $request->file('leaderCV')->getClientOriginalExtension();
        // $cv = $request->leaderName . '_CV_' . $extensionCV;
        // $request->file('leaderCV')->storeAs('/public/storage/CV', $cv);

        // $extensionFlazz = $request->file('leaderFlazz')->getClientOriginalExtension();
        // $flazz = $request->leaderName . '_Flazz_' . $extensionFlazz;
        // $request->file('leaderFlazz')->storeAs('/public/strorage/Flazz', $flazz);

        $group_id = Auth::id();
        Member::create([
            'memberFullName' => $request->memberFullName,
            'memberEmail' => $request->memberEmail,
            'memberWA' => $request->memberWA,
            'memberLine' => $request->memberLine,
            'memberGithub' => $request->memberGithub,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            // 'leaderCV' => $cv,
            // 'leaderFlazz' => $flazz,
            'group_id' => $group_id
        ]);
        return redirect('dashboard');
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('dashboard', compact('member'));
    }

}
