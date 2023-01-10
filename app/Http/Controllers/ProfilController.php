<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $data = Profil::query()->get();
        return view('layouts.admin.profil', compact('data'));
    }

    public function edit($id)
    {
        $data = Profil::find($id);
        if (empty($data)) {
            # jika data kosong empty() maka 
            return redirect()->back()->with('galat', 'Data Belum di Tambahkan');
            # fungsi with() adalah untuk membawa notifikasi dengan session yang berupa pemberitahuan
        }

        return view('layouts.admin.profilinput', compact('data'));

    }



    public function update(Request $request, $id){
        $data = Profil::find($id);

        $data->update([
            'alamat_kel' => $request->alamat_kel,
            'telp_kel' => $request->telp_kel,
            'alamat_rt' => $request->alamat_rt,
            'telp_rt' => $request->telp_rt,
        ]);

        return redirect()->route('profil.index')->with('berupdate', 'Data Berhasil di Perbarui');

    }

}
