<?php

namespace App\Http\Controllers;

use App\Models\notes;
use App\Models\notesku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{

    public function notes()
    {
        // $data = notesku::all();
        // return view('stock/index')->with('data', $data);
        $data = notesku::all();
        return view('stock.index', compact('data'));
    }

    public function store(Request $request)
    {
        $role = Auth::user()->nickname;
        // insert data ke table pegawai
        DB::table('notes')->insert([
            'contents' => $request->konten,
            'admin' => $role

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/notes');
    }

    public function hapus($data)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('notes')->where('id', $data)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/notes');
    }
}