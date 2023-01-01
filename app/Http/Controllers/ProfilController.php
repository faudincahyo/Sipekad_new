<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        return view('layouts.admin.profil');
    }
    public function create()
    {
        $profil = Profil::query()
        ->get();
        return view('layouts.admin.profilinput', compact('profil'));
    }

    public function store(Request $request)
    {
        Profil::create([
            'alamat_kel' => $request->alamat_kel,
            'telp_kel' => $request->telp_kel,
            'alamat_rt' => $request->alamat_rt,
            'telp_rt' => $request->alamat_kel,
        ]);

        return redirect()->back()->with('success', 'Data Berhasil di Perbarui');
    }
}
