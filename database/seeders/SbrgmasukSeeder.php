<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SbrgmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sbrg_masuk')->insert([
            'idx' => '1',
            'tgl' => '2022-12-02',
            'jumlah' => '3',
            'keterangan' => 'Dari Pak Rektor',

        ]);
    }
}