<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function dashboard()
    {
        $data = DB::table('sstock_brg')
            ->select(DB::raw('SUM(stock) as total_stock'))
            ->get();

        $data1 = DB::table('sstock_brg')
            ->select('kondisi', DB::raw('SUM(stock) as total_stock'))
            ->where('kondisi', '=', 'baik')
            ->groupBy('kondisi')
            ->get();

        $data2 = DB::table('sstock_brg')
            ->select('kondisi', DB::raw('SUM(stock) as total_stock'))
            ->where('kondisi', '=', 'buruk')
            ->groupBy('kondisi')
            ->get();

        $data3 = DB::table('sstock_brg')
            ->select('nama', DB::raw('SUM(CASE WHEN kondisi = "baik" THEN stock  ELSE 0 END) as jumlah_baik'), DB::raw('SUM(CASE WHEN kondisi = "buruk" THEN stock ELSE 0 END) as jumlah_buruk'), DB::raw('SUM(stock) as total_stock'))
            ->groupBy('nama')
            ->get();


        $data4 = DB::table('sstock_brg')
            ->select(DB::raw('SUM(CASE WHEN kondisi = "baik" THEN stock ELSE 0 END) as jumlah_baik'), DB::raw('SUM(CASE WHEN kondisi = "buruk" THEN stock ELSE 0 END) as jumlah_buruk'))
            ->get();



        return view('stock.dashboard', ['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
    }
}