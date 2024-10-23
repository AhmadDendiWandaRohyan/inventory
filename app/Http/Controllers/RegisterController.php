<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index()
    {
        return view('stock.register');
    }

    public function store(Request $request)
    {
        // DB::table('slogin')->insert([
        //     'username' => $request->username,
        //     'nickname' => $request->nickname,
        //     'role' => $request->role,
        //     'password' => $request->password

        // ]);
        // // alihkan halaman ke halaman data barang
        // return redirect('/stock');

        $validatedata = $request->validate([
            'username' => 'required|max:255',
            'nickname' => ['required', 'min:3', 'max:255', 'unique:slogin'],
            'role' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedata['password'] = Hash::make($validatedata['password']);
        User::create($validatedata);

        return redirect('/dataaccount');
    }
}