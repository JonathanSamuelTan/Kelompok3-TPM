<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
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
        // ini mana yg bener ?

        // $member = Members::all();
        // return view('createMember', compact('member'));

        return view('createMember');
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
            'memberFullName' => 'required',
            'memberEmail' => 'required',
            'memberWA' => 'required',
            'memberLine' => 'required',
            'memberGithub' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'memberCV' => 'required',
            'memberFlazz' => 'required',
        ]);

        Member::create([
            'memberFullName' => $request->memberFullName,
            'memberEmail' => $request->memberEmail,
            'memberWA' => $request->memberWA,
            'memberLine' => $request->memberLine,
            'memberGithub' => $request->memberGithub,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'memberCV' => $request->memberCV,
            'memberFlazz' => $request->memberFlazz,
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
