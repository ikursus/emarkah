<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $query = [
          ['id' => 1, 'nama' => 'PHP Framework Laravel'],
          ['id' => 2, 'nama' => 'Adobe Photoshop'],
          ['id' => 3, 'nama' => 'Web Joomla'],
      ];

      # Beri respon paparkan template_index.php dari folder resources/views/users
      return view('kursus.template_index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      # Beri respon paparkan template_create.php dari folder resources/views/users
      return view('kursus.template_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'nama' => 'required|min:3'
      ]);

        $data = $request->all();

        return $data;

        # return 'Rekod berjaya ditambah!';
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
      # Beri respon paparkan template_edit.php dari folder resources/views/users
      return view('kursus.template_edit');
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
      $request->validate([
        'nama' => 'required|min:3'
      ]);

        $data = $request->all();

        return redirect()->back()->with('alert-success', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('kursus.index')->with('alert-success', 'Rekod berjaya dihapuskan');
    }
}
