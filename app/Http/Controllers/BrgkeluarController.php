<?php

namespace App\Http\Controllers;

use App\Models\sbrg_keluar;
use App\Models\stock_brg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrgkeluarController extends Controller
{
    function index()
    {
        $data_brg = stock_brg::all()->sortByDesc('idx');
        $data1 = DB::table('sstock_brg')
            ->join('sbrg_keluar', 'sbrg_keluar.idx', '=', 'sstock_brg.idx')
            ->get()->sortByDesc('id');

        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('stock.brg_keluar', ['data_brg' => $data_brg, 'data1' => $data1]);
    }

    function exportdataklr()
    {
        $data_brg = stock_brg::all()->sortByDesc('idx');
        $data1 = DB::table('sstock_brg')
            ->join('sbrg_keluar', 'sbrg_keluar.idx', '=', 'sstock_brg.idx')
            ->get()->sortByDesc('id');

        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('cetak.exportbrgklr', ['data_brg' => $data_brg, 'data1' => $data1]);
    }

    public function store(Request $request)
    {
        DB::table('sbrg_keluar')->insert([
            'idx' => $request->idx,
            'tgl' => $request->tanggal,
            'jumlah' => $request->qty,
            'penerima' => $request->penerima,
            'keterangan' => $request->ket

        ]);
        // alihkan halaman ke halaman data barang
        return redirect('/stock/brg_keluar');
    }

    public function hapusdataklr($data1)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('sbrg_keluar')->where('id', $data1)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/stock/brg_keluar');
    }

    public function editklr(request $request, $id)
    {
        $data1 = sbrg_keluar::where('id', $id)->first();

        return view('stock.brg_keluar', compact('data1'));
    }

    public function simpanupdateklr(request $request, $id)
    {

        $data1 = sbrg_keluar::where('id', $id)->first();
        $data1->tgl = $request->tanggal;
        $data1->jumlah = $request->jumlah;
        $data1->penerima = $request->penerima;
        $data1->keterangan = $request->keterangan;

        $data1->save();

        return redirect('/stock/brg_keluar');
    }
}