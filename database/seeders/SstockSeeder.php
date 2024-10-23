<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SstockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sstock_brg')->insert([
            'nama' => 'Kamaera Canon EOS',
            'jenis' => 'Kamera',
            'merk' => 'Canon',
            'seri' => '-',
            'stock' => '15',
            'satuan' => 'Buah',
            'lokasi' => 'tvku',

        ]);

        DB::table('sstock_brg')->insert([
            'nama' => 'Monitor Led Lenovo',
            'jenis' => 'Monitor',
            'merk' => 'Lenovo',
            'seri' => '-',
            'stock' => '10',
            'satuan' => 'Buah',
            'lokasi' => 'tvku',

        ]);
    }
}