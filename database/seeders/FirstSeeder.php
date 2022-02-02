<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Halaman;
use App\Models\Komentar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'administrator',
        ]);

        Role::create([
            'name' => 'author',
        ]);

        Role::create([
            'name' => 'contributor',
        ]);

        Role::create([
            'name' => 'reader',
        ]);

        User::create([
            'name'      => 'Henry',
            'email'     => 'henry@gmail.com',
            'password'  => Hash::make('henry123'),
            'role_id'   => 1
        ]);

        User::create([
            'name'      => 'udin',
            'email'     => 'udin@gmail.com',
            'password'  => Hash::make('udin123'),
            'role_id'   => 2
        ]);

        User::create([
            'name'      => 'wahyu',
            'email'     => 'wahyu@gmail.com',
            'password'  => Hash::make('wahyu123'),
            'role_id'   => 3
        ]);

        User::create([
            'name'      => 'alul',
            'email'     => 'alul@gmail.com',
            'password'  => Hash::make('alul123'),
            'role_id'   => 4
        ]);

        Artikel::create([
            'judul'     => 'judul 1',
            'content'   => 'joget alul',
            'user_id'   => 1,
            'status'    => 3
        ]);

        Artikel::create([
            'judul'     => 'judul 2',
            'content'   => 'ternak uler',
            'user_id'   => 2,
            'status'    => 2
        ]);

        Artikel::create([
            'judul'     => 'judul 3',
            'content'   => 'bertani',
            'user_id'   => 3,
            'status'    => 1
        ]);

        Halaman::create([
            'name'      => 'About me',
            'content'   => 'tentang saya',
        ]);

        Halaman::create([
            'name'      => 'Artikel',
            'content'   => 'kumpulan artikel',
        ]);

        Halaman::create([
            'name'      => 'writer',
            'content'   => 'penulis',
        ]);

        Komentar::create([
            'user_id'       => 2,
            'status'        => 3,
            'artikel_id'    => 1,
            'comment'       => 'Halo saya ikut',
            'comment_id'    => null
        ]);

        Komentar::create([
            'user_id'       => 3,
            'status'        => 2,
            'artikel_id'    => 1,
            'comment'       => 'boleh ikut',
            'comment_id'    => 1
        ]);

        Komentar::create([
            'user_id'       => 3,
            'status'        => 3,
            'artikel_id'    => 1,
            'comment'       => 'Saya juga',
            'comment_id'    => 1
        ]);
    }
}
