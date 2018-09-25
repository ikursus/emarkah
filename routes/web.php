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
Route::get('users', 'UsersController@index')->name('users.index');
# Route untuk tambah maklumat user
Route::get('users/add', 'UsersController@create')->name('users.create');
# Route untuk tambah maklumat user
Route::post('users/add', 'UsersController@store')->name('users.store');
# Route untuk tambah maklumat user
Route::get('users/{id}/edit', 'UsersController@edit')->name('users.edit');
# Route untuk tambah maklumat user
Route::patch('users/{id}/edit', 'UsersController@update')->name('users.update');
# Route untuk tambah maklumat user
Route::delete('users/{id}', 'UsersController@destroy')->name('users.destroy');
