<?php

namespace App\Http\Controllers;

use App\Models\ProfilUser;
use Illuminate\Http\Request;

class ProfilUserController extends Controller
{
    public function index(){
        $data = ProfilUser::query()->get();
        return view('layouts.user.profil', compact('data'));
    }

    public function create()
    {
        return view('layouts.user.profiluser');
    }

    public function store(Request $request)
    {
        ProfilUser::create([
            'alamat_kel' => $request->alamat_kel,
            'telp_kel' => $request->telp_kel,
            'alamat_rt' => $request->alamat_rt,
            'telp_rt' => $request->telp_kel,

        ]);
        return redirect()->route('profiluser.create')->with('success', 'Profil Anda Berhasil di Masukkan');
    }

    public function edit($id)
    {
        $data = ProfilUser::find($id);
        if (empty($data)) {
            # jika data kosong empty() maka 
            return redirect()->back()->with('galat', 'Data Belum di Tambahkan');
            # fungsi with() adalah untuk membawa notifikasi dengan session yang berupa pemberitahuan
        }

        return view('layouts.user.profilinput', compact('data'));

    }



    public function update(Request $request, $id){
        $data = ProfilUser::find($id);

        $data->update([
            'alamat_kel' => $request->alamat_kel,
            'telp_kel' => $request->telp_kel,
            'alamat_rt' => $request->alamat_rt,
            'telp_rt' => $request->telp_rt,
        ]);

        return redirect()->route('profiluser.index')->with('berupdate', 'Data Berhasil di Perbarui');

    }

}
