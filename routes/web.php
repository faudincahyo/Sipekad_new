<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

Route::resource('input', App\Http\Controllers\AdminController::class);

Route::get('require', [App\Http\Controllers\AdminController::class, 'ktp']);

Route::get('require/sim', [App\Http\Controllers\AdminController::class, 'sim']);

Route::get('/skck', [App\Http\Controllers\AdminController::class, 'skck']);

Route::get('/domisili', [App\Http\Controllers\AdminController::class, 'domisili']);

Route::get('/nikah', [App\Http\Controllers\AdminController::class, 'nikah']);

Route::resource('profil', App\Http\Controllers\ProfilController::class);




