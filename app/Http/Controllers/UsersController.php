<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {

        $data_users = [
            ['id' => 1, 'nama' => 'Ali Baba', 'email' => 'ali@baba.com'],
            ['id' => 2, 'nama' => 'Ahmad Albab', 'email' => 'ahmad@baba.com'],
            ['id' => 3, 'nama' => 'Sammy Muthu', 'email' => 'sammy@baba.com'],
            ['id' => 4, 'nama' => 'Lin Dan', 'email' => 'lindan@baba.com'],
            ['id' => 5, 'nama' => 'John Doe', 'email' => 'john@baba.com']
        ];

        $page_title = '<h1>Senarai Users</h1>';

        # Beri respon paparkan template_index.php dari folder resources/views/users
        return view('users.template_index', compact('data_users', 'page_title'));
    }

    public function create() {
        # Beri respon paparkan template_create.php dari folder resources/views/users
        return view('users.template_create');
    }

    public function store() {
        # Dapatkan data dari borang template_create menerusi method POST
        return 'Rekod berjaya ditambah!';
    }

    public function edit($id) {
        # Beri respon paparkan template_edit.php dari folder resources/views/users
        return view('users.template_edit');
    }

    public function update($id) {
        # Dapatkan data dari borang template_edit menerusi method PATCH
        return 'Rekod berjaya dikemaskini';
    }

    public function destroy($id) {
        # Hapuskan rekod dari database
        return 'Rekod berjaya dihapuskan!';
    }
}
