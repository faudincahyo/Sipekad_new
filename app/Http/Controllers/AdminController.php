<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin.home');
    }


    public function store(Request $request){
     Input::create([
        'nama' => $request->nama,
        'persyaratan' => $request->persyaratan,
     ]);
     

     
     return redirect()->route('input.create')->with('success', 'Data Berhasil di Tambahkan');
    }


    public function create()
    {
        $input = Input::query()
        ->get();
        return view('layouts.admin.input', compact('input'));
    }

    public function edit($id)
    {
        $input = Input::find($id);
        if (empty($input)) {
            # jika data kosong empty() maka 
            return redirect()->route('input.create')->with('galat', 'Data Belum di Tambahkan');
            # fungsi with() adalah untuk membawa notifikasi dengan session yang berupa pemberitahuan
        }

        return view('layouts.admin.edit', compact('input'));

    }

    public function update(Request $request, $id){
        $data = Input::find($id);

        if (empty($data)) {
            # kembalikan ke halaman list product dengan notifikasi with
            return redirect()->route('product.create')->with('galat', 'product not found');
        }

        $data->update([
            'nama' => $request->nama,
            'persyaratan' => $request->persyaratan,
        ]);

        return redirect()->route('input.create')->with('berupdate', 'Data Berhasil di Perbarui');

    }

    public function destroy($id){
      
        $data = Input::find($id);

        $data->delete();
        
        return redirect()->route('input.create')->with('berhasil', 'Data Berhasil di Hapus');
    }
}
