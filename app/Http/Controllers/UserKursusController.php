<?php

namespace App\Http\Controllers;

use App\UserKursus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserKursusController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserKursus  $userKursus
     * @return \Illuminate\Http\Response
     */
    public function show(UserKursus $userKursus)
    {
        # $userkursus = UserKursus::find($id);
        return view('template', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserKursus  $userKursus
     * @return \Illuminate\Http\Response
     */
    public function edit(UserKursus $userKursus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserKursus  $userKursus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserKursus $userKursus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserKursus  $userKursus
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserKursus $userKursus)
    {
        //
    }
}
