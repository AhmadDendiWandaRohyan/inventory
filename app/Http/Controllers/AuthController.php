<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    function index()
    {
        $user = User::all();
        return view('login.index', compact('user'));
    }

    function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username Wajib di isi',
            'password.required' => 'Password Wajib di isi',

        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // $data = notesku::all();
            // return view('stock/index')->with('data', $data);
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
        } else {
            // return 'gagal';

            return redirect('/')->withErrors('Username dan Password yang dimasukan tidak valid');
        }
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}