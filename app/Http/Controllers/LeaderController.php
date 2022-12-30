<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createLeader');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'leaderName' => 'required',
            'leaderEmail' => 'required',
            'leaderWA' => 'required | numeric | min:10 ',
            'leaderLine' => 'required',
            'leaderGithub' => 'required | url',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'leaderCV' => 'required',
            'leaderFlazz' => 'required',
        ]);

        $extensionCV = $request->file('leaderCV')->getClientOriginalExtension();
        $cv = $request->leaderName . '.CV.' . $extensionCV;
        $request->file('leaderCV')->storeAs('/public/CV', $cv);

        $extensionFlazz = $request->file('leaderFlazz')->getClientOriginalExtension();
        $flazz = $request->leaderName . '.Flazz.' . $extensionFlazz;
        $request->file('leaderFlazz')->storeAs('/public/Flazz', $flazz);
        
        Leader::create([
            'leaderName' => $request->leaderName,
            'leaderEmail' => $request->leaderEmail,
            'leaderWA' => $request->leaderWA,
            'leaderLine' => $request->leaderLine,
            'leaderGithub' => $request->leaderGithub,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'leaderCV' => $cv,
            'leaderFlazz' => $flazz
        ]);
        return redirect('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
