<?php

namespace App\Http\Controllers;

use App\Models\ProfilUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilUserController extends Controller
{

    public function index(){
        $data = DB::table('users')->get();
        return view('layouts.user.profil', compact('data'));
    }

}
