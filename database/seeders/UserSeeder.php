<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slogin')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'nickname' => 'Dendi',
            'role' => 'stock',
        ]);

        DB::table('slogin')->insert([
            'username' => 'ujang',
            'password' => Hash::make('ujang'),
            'nickname' => 'Ujang',
            'role' => 'Admin',
        ]);
    }
}