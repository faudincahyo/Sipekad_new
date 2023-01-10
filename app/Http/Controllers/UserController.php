<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('layouts.user.home');
    }

    public function ktp(){
        return view('layouts.user.require');
    }

    public function sim(){
        return view('layouts.user.sim');
    }

    public function skck(){
        return view('layouts.user.skck');
    }

    public function domisili(){
        return view('layouts.user.domisili');
    }

    public function nikah(){
        return view('layouts.user.nikah');
    }
}
