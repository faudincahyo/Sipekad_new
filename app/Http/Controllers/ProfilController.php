<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\ProfilUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index(){
        
        $data = DB::table('users')->get();
        return view('layouts.admin.profil', compact('data'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        if (empty($data)) {
            # jika data kosong empty() maka 
            return redirect()->back()->with('galat', 'Data Belum di Tambahkan');
            # fungsi with() adalah untuk membawa notifikasi dengan session yang berupa pemberitahuan
        }

        return view('layouts.admin.profilupdate', compact('data'));

    }



    public function update(Request $request, $id){
        $data = User::find($id);

        $data->update([
            'name' => $request->name,
            'alamat_kel' => $request->alamat_kel,
            'no_kel' => $request->no_kel,
            'alamat_rt' => $request->alamat_rt,
            'no_rt' => $request->no_rt,
        ]);

        return redirect()->route('profil.index')->with('berupdate', 'Data Berhasil di Perbarui');

    }


}
