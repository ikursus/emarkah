<?php

namespace App\Http\Controllers;

use App\UserMarkah;
use App\User;
use App\Kursus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserMarkahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = UserMarkah::all();

        return view('markah.template_index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $senarai_student = User::where('role', '=', 'student')->select('nama', 'id')->get();
        $senarai_kursus = Kursus::select('nama', 'id')->get();

        return view('markah.template_create', compact('senarai_student', 'senarai_kursus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        UserMarkah::create($data);

        return redirect()->route('markah.index')->with('alert-success', 'Rekod berjaya ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserMarkah  $userMarkah
     * @return \Illuminate\Http\Response
     */
    public function show(UserMarkah $userMarkah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserMarkah  $userMarkah
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMarkah $userMarkah)
    {
        $query = UserMarkah::find($id);

        return view('markah.template_edit', compact('query'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserMarkah  $userMarkah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserMarkah $userMarkah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserMarkah  $userMarkah
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMarkah $userMarkah)
    {
        $query = UserMarkah::find($id);
        $query->delete();

        return redirect()->route('markah.index')->with('alert-success', 'Rekod berjaya dihapuskan!');
    }
}
