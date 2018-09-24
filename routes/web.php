<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('dashboard', function () {
    # Bagi respon paparkan template_dashboard.php dari folder resources/views/user
    # return view('user.template_dashboard');
    return view('user/template_dashboard');
});

# Route untuk paparkan senarai users
Route::get('users', function () {

    $data_users = [
        ['id' => 1, 'nama' => 'Ali Baba', 'email' => 'ali@baba.com'],
        ['id' => 2, 'nama' => 'Ahmad Albab', 'email' => 'ahmad@baba.com'],
        ['id' => 3, 'nama' => 'Sammy Muthu', 'email' => 'sammy@baba.com'],
        ['id' => 4, 'nama' => 'Lin Dan', 'email' => 'lindan@baba.com'],
        ['id' => 5, 'nama' => 'John Doe', 'email' => 'john@baba.com']
    ];

    # Beri respon paparkan template_index.php dari folder resources/views/users
    return view('users.template_index', compact('data_users'));
})->name('users.index');

# Route untuk tambah maklumat user
Route::get('users/add', function () {
    # Beri respon paparkan template_create.php dari folder resources/views/users
    return view('users.template_create');
})->name('users.create');

# Route untuk tambah maklumat user
Route::post('users/add', function () {
    # Dapatkan data dari borang template_create menerusi method POST
    return 'Rekod berjaya ditambah!';
})->name('users.store');

# Route untuk tambah maklumat user
Route::get('users/{id}/edit', function ($id) {
    # Beri respon paparkan template_edit.php dari folder resources/views/users
    return view('users.template_edit');
})->name('users.edit');

# Route untuk tambah maklumat user
Route::patch('users/{id}/edit', function ($id) {
    # Dapatkan data dari borang template_edit menerusi method PATCH
    return 'Rekod berjaya dikemaskini';
})->name('users.update');

# Route untuk tambah maklumat user
Route::delete('users/{id}', function ($id) {
    # Hapuskan rekod dari database
    return 'Rekod berjaya dihapuskan!';
})->name('users.destroy');
