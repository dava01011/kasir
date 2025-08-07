<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //dissable foreign key yang ada di tabel users
        schema::disableForeignKeyConstraints();
        //reset data di tabel users
        User::truncate();
        //enable foreign key yang ada di tabel users
        schema::enableForeignKeyConstraints();


        $data = [
            [
                'nama_lengkap' => 'Superrr Admin',
                'email' => 'superrr_admin@gmail.com',
                'password' => Hash::make('admin123'),
                'hak_akses' => 'admin',
            ],
            [
                'nama_lengkap' => 'Momoya',
                'email' => 'momoya@gmail.com',
                'password' => Hash::make('moya123'),
                'hak_akses' => 'kasir',
            ]
        ];


        //multiple insert data ke tabel users
        foreach ($data as $value) {
            User::create([
                'nama_lengkap' => $value['nama_lengkap'],
                'email' => $value['email'],
                'password' => $value['password'],
                'hak_akses' => $value['hak_akses'],
            ]);
        }

        //input data  ke tabel user menggunakan eloquent
        // User::create([
        //     'nama_lengkap' => 'Ariana Guntoro',
        //     'email' => 'admin2@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'hak_akses' => 'admin',

        // ]);

        //input data ke tabel users query builder
        // DB::table('users')->insert([
        //     'nama_lengkap' => 'Aria Guntoro',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'hak_akses' => 'admin',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
