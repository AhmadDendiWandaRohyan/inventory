<?php

namespace App\Http\Controllers;

use App\Models\sbrg_masuk;
use App\Models\stock_brg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrgmasukController extends Controller
{
    function index()
    {
        $data_brg = stock_brg::all()->sortByDesc('idx');
        $data1 = DB::table('sstock_brg')
            ->join('sbrg_masuk', 'sbrg_masuk.idx', '=', 'sstock_brg.idx')
            ->get()->sortByDesc('id');

        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('stock.brg_masuk', ['data_brg' => $data_brg, 'data1' => $data1]);
    }

    function exportdatamsk()
    {
        $data_brg = stock_brg::all()->sortByDesc('idx');
        $data1 = DB::table('sstock_brg')
            ->join('sbrg_masuk', 'sbrg_masuk.idx', '=', 'sstock_brg.idx')
            ->get()->sortByDesc('id');

        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('cetak.exportbrgmsk', ['data_brg' => $data_brg, 'data1' => $data1]);
    }

    public function store(Request $request)
    {
        DB::table('sbrg_masuk')->insert([
            'idx' => $request->idx,
            'tgl' => $request->tanggal,
            'jumlah' => $request->qty,
            'keterangan' => $request->ket

        ]);
        // alihkan halaman ke halaman data barang
        return redirect('/stock/brg_masuk');
    }

    public function hapusdatamsk($data1)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('sbrg_masuk')->where('id', $data1)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/stock/brg_masuk');
    }

    public function editmsk(request $request, $id)
    {
        $data1 = sbrg_masuk::where('id', $id)->first();

        return view('stock.brg_masuk', compact('data1'));
    }

    public function simpanupdatemsk(request $request, $id)
    {

        $data1 = sbrg_masuk::where('id', $id)->first();
        $data1->tgl = $request->tanggal;
        $data1->jumlah = $request->jumlah;
        $data1->keterangan = $request->keterangan;

        $data1->save();

        return redirect('/stock/brg_masuk');
    }
}