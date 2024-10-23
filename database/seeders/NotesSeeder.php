<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'contents' => 'Disini bisa tulis notes1',
            'admin' => 'admin',
            'status' => 'aktif',
        ]);

        DB::table('notes')->insert([
            'contents' => 'Disini bisa tulis notes2',
            'admin' => 'gudang',
            'status' => 'aktif',
        ]);
    }
}