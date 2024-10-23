<?php

namespace App\Http\Controllers;

use App\Models\sbrg_masuk;
use App\Models\stock_brg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class Dbarang extends Controller
{
    function dbarang()

    {
        $data1 = stock_brg::all()->sortByDesc('idx');
        return view('stock.dbarang', compact('data1'));
    }

    function exportstkbhn()

    {
        $data1 = stock_brg::all()->sortByDesc('idx');
        return view('cetak.exportstkbhn', compact('data1'));
    }


    public function store(Request $request)
    {

        // insert data ke table databarang
        DB::table('sstock_brg')->insert([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'merk' => $request->merk,
            'seri' => $request->seri,
            'stock' => $request->stock,
            'satuan' => $request->satuan,
            'kondisi' => $request->kondisi,
            'lokasi' => $request->lokasi

        ]);
        // alihkan halaman ke halaman data barang
        return redirect('/stock/dbarang');
    }

    public function hapusdata($data1)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('sstock_brg')->where('idx', $data1)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/stock/dbarang');
    }

    public function edit(request $request, $idx)
    {
        $data1 = stock_brg::where('idx', $idx)->first();

        return view('stock.dbarang', compact('data1'));
    }

    public function simpanupdate(request $request, $id)
    {
        $data1 = stock_brg::where('idx', $id)->first();
        $data1->nama = $request->nama;
        $data1->jenis = $request->jenis;
        $data1->merk = $request->merk;
        $data1->seri = $request->seri;
        // $data1->stock = $request->stock;
        $data1->satuan = $request->satuan;
        // $data1->kondisi = $request->kondisi;
        $data1->lokasi = $request->lokasi;
        $data1->save();

        return redirect('/stock/dbarang');
    }
}
