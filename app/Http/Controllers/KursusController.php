<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kursus;
use DataTables;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      # Beri respon paparkan template_index.php dari folder resources/views/users
      # return view('kursus.template_index');
      return view('themes.'.config('emarkah.theme').'.kursus.template_index');
    }

    /**
   * Process datatables ajax request.
   *
   * @return \Illuminate\Http\JsonResponse
   */
    public function datatables()
    {
        # Dapatkan SEMUA rekod dari table kursus
        $query = Kursus::select('id', 'nama','status', 'credit');

        return DataTables::of($query)
        ->addColumn('tindakan', function ($item) {
          return view('kursus/template_tindakan', compact('item'));
        })
        ->rawColumns(['tindakan'])
        ->make(true);
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
        'nama' => 'required|min:3',
        'credit' => 'required|integer',
      ]);
      # Dapatkan semua data daripada borang
      $data = $request->all();
      # Simpan data ke dalam table kursus
      Kursus::create($data);
      # return redirect
      return redirect()->route('kursus.index')->with('alert-success', 'Rekod berjaya ditambah');
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
      # $kursus = Kursus::where('id', '=', $id)->first();
      $kursus = Kursus::find($id);
      # Beri respon paparkan template_edit.php dari folder resources/views/users
      return view('kursus.template_edit', compact('kursus'));
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
        'nama' => 'required|min:3',
        'credit' => 'required|integer',
      ]);
      # Dapatkan semua data daripada borang
      $data = $request->all();
      # Simpan data ke dalam table kursus
      $kursus = Kursus::find($id);
      $kursus->update($data);
      # return redirect
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
        $kursus = Kursus::find($id);
        $kursus->delete();

        return redirect()->route('kursus.index')->with('alert-success', 'Rekod berjaya dihapuskan');
    }
}
