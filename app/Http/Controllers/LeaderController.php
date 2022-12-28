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
        // $leader= Leaders::all();
        // return view('createLeader', compact('leader'));
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
            'leaderFullName' => 'required',
            'leaderEmail' => 'required',
            'leaderWA' => 'required',
            'leaderLine' => 'required',
            'leaderGithub' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'leaderCV' => 'required',
            'leaderFlazz' => 'required',
        ]);

        Leaders::create([
            'leaderFullName' => $request->leaderFullName,
            'leaderEmail' => $request->leaderEmail,
            'leaderWA' => $request->leaderWA,
            'leaderLine' => $request->leaderLine,
            'leaderGithub' => $request->leaderGithub,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'leaderCV' => $request->leaderCV,
            'leaderFlazz' => $request->leaderFlazz,
        ]);
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
