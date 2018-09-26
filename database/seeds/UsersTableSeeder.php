<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Sample user 1
        DB::table('users')->insert([
          'nama' => 'John Doe',
          'email' => 'johndoe@gmail.com',
          'phone' => '0123456789',
          'password' => bcrypt('johndoe'),
          'role' => 'admin',
          'gambar' => '',
          'tarikh_lahir' => '2000-12-30',
          'alamat' => 'No. 123 Puchong.'
        ]);

        # Sample user 2
        DB::table('users')->insert([
          'nama' => 'Ali Baba',
          'email' => 'alibaba@gmail.com',
          'phone' => '0123456789',
          'password' => bcrypt('alibaba'),
          'role' => 'staff',
          'gambar' => '',
          'tarikh_lahir' => '1980-12-30',
          'alamat' => 'No. 123 Puchong.'
        ]);

        # Sample user 3
        DB::table('users')->insert([
          'nama' => 'Siti',
          'email' => 'siti@gmail.com',
          'phone' => '0123456789',
          'password' => bcrypt('siti'),
          'role' => 'student',
          'gambar' => '',
          'tarikh_lahir' => '2008-12-30',
          'alamat' => 'No. 123 Puchong.'
        ]);
    }
}
