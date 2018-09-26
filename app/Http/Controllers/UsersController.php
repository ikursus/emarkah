<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    public function index() {

        // $data_users = [
        //     ['id' => 1, 'nama' => 'Ali Baba', 'email' => 'ali@baba.com'],
        //     ['id' => 2, 'nama' => 'Ahmad Albab', 'email' => 'ahmad@baba.com'],
        //     ['id' => 3, 'nama' => 'Sammy Muthu', 'email' => 'sammy@baba.com'],
        //     ['id' => 4, 'nama' => 'Lin Dan', 'email' => 'lindan@baba.com'],
        //     ['id' => 5, 'nama' => 'John Doe', 'email' => 'john@baba.com']
        // ];
        # Dapatkan SEMUA rekod dari table users
        // $data_users = DB::table('users')
        // ->select('id', 'nama', 'email', 'role')
        // ->orderBy('nama', 'asc')
        // //->where('id', '=','2')
        // ->get();

        $data_users = DB::table('users')
        ->select('id', 'nama', 'email', 'role')
        ->paginate(10);

        $page_title = '<h1>Senarai Users</h1>';

        # Beri respon paparkan template_index.php dari folder resources/views/users
        return view('users.template_index', compact('data_users', 'page_title'));
    }

    public function create() {
        # Beri respon paparkan template_create.php dari folder resources/views/users
        return view('users.template_create');
    }

    public function store(Request $request) {
      // $this->validate($request, [
      //   'nama' => 'required|min:3'
      // ]);

      $request->validate([
        'nama' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:3',
        'gambar' => 'mimetypes:jpeg,png,bmp,jpg,gif'
      ]);

        # Dapatkan data dari borang template_create menerusi method POST
        # $data = $request->all();
        # $data = $request->input('nama');
        # $data = $request->only('nama', 'password');
        $data = $request->only('nama','email', 'phone', 'alamat', 'role', 'tarikh_lahir');
        # Tambah array $data password yang telah diencrypt
        $data['password'] = bcrypt( $request->input('password') );
        # Simpan data ke dalam database
        DB::table('users')->insert($data);
        # Beri respon redirect ke senarai halaman users
        return redirect()->route('users.index')->with('alert-success', 'Rekod berjaya ditambah!');
    }

    public function edit($id)
    {
        # Dapatkan rekod user berdasarkan ID
        $user = DB::table('users')->where('id', '=', $id)->first();
        // $user = DB::table('users')->whereId($id)->first();
        # Beri respon paparkan template_edit.php dari folder resources/views/users
        return view('users.template_edit', compact('user') );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
          'nama' => 'required|min:3',
          'email' => 'required|email',
          'gambar' => 'mimetypes:jpeg,png,bmp,jpg,gif'
        ]);

        $data = $request->only('nama','email', 'phone', 'alamat', 'role', 'tarikh_lahir');
        # Jika password diisi (tidak kosong), baru update ke dalam table
        if ( !empty($request->input('password') ))
        {
          # Tambah array $data password yang telah diencrypt
          $data['password'] = bcrypt( $request->input('password') );
        }
        # Simpan data ke dalam database
        DB::table('users')->where('id', '=', $id)->update($data);
        # Beri respon redirect ke senarai halaman users
        return redirect()->back()->with('alert-success', 'Rekod berjaya dikemaskini!');
    }

    public function destroy($id) {
        # Hapuskan rekod dari database
        DB::table('users')->where('id', '=', $id)->delete();

        return redirect()->route('users.index')->with('alert-success', 'Rekod berjaya dihapuskan!');
    }
}
