<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DUserController extends Controller
{
    function duser()

    {
        $data1 = User::all()->sortByDesc('id');
        return view('stock.data_akun', compact('data1'));
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

    public function hapusdatauser($data1)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('slogin')->where('id', $data1)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/dataaccount');
    }

    public function edituser(request $request, $id)
    {
        $data1 = User::where('id', $id)->first();

        return view('stock.data_akun', compact('data1'));
    }

    public function simpanupdateuser(request $request, $id)
    {
        $data1 = User::where('id', $id)->first();
        $data1->username = $request->username;
        $data1->nickname = $request->nickname;
        $data1->role = $request->role;
        $data1->password = Hash::make($request->password);
        // $data1->stock = $request->stock;
        $data1->save();

        return redirect('/dataaccount');
    }
}