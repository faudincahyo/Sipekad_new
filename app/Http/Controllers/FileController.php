<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\Pengantar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use illuminate\Support\Facades\File; 
use PDF;
class FileController extends Controller
{
    public function index()
    {
        $data = Pengantar::all();
        return view('layouts.user.download', compact('data'));
    }

    public function cetakpdf()
    {
        $data = Pengantar::all();
        $pdf = PDF::loadView('layouts.user.convert',compact('data'));
        
        return $pdf->download('pengantar.pdf');
    }

    public function domisilipdf()
    {
        $data = Domisili::all();
        return view('layouts.user.domisilicetak', compact('data'));
    }

    public function cetakdomisili()
    {
        $data = Domisili::all();
        $pdf = PDF::loadView('layouts.user.convertdomisili',compact('data'));
        
        return $pdf->download('domisili.pdf');
    }
}
