<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilUserController;
use App\Models\Profil;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//User Routes
Route::get('home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::get('require', [App\Http\Controllers\UserController::class, 'ktp']);
Route::get('require/sim', [App\Http\Controllers\UserController::class, 'sim']);
Route::get('/skck', [App\Http\Controllers\UserController::class, 'skck']);

Route::get('/domisili', [App\Http\Controllers\UserController::class, 'domisili']);

Route::get('/nikah', [App\Http\Controllers\UserController::class, 'nikah']);

//Route Profil User
Route::resource('profiluser', App\Http\Controllers\ProfilUserController::class);

// Route surat pengantar
Route::get('download', [App\Http\Controllers\FileController::class, 'index'])->name('download');
Route::get('download/cetakpdf', [App\Http\Controllers\FileController::class, 'cetakpdf'])->name('cetakpdf');
//Route Surat Domisili

Route::get('domisilicetak', [App\Http\Controllers\FileController::class, 'domisilipdf'])->name('domisiliview');
Route::get('domisilicetak/domisilipdf', [App\Http\Controllers\FileController::class, 'cetakdomisili'])->name('cetakdomisili');


Auth::routes();
//Admin Routes
Route::prefix('admin')->middleware('role:admin')->group(function(){

Route::get('', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::resource('input', App\Http\Controllers\AdminController::class);

Route::get('require', [App\Http\Controllers\AdminController::class, 'ktp']);

Route::get('require/sim', [App\Http\Controllers\AdminController::class, 'sim']);

Route::get('/skck', [App\Http\Controllers\AdminController::class, 'skck']);

Route::get('/domisili', [App\Http\Controllers\AdminController::class, 'domisili']);

Route::get('/nikah', [App\Http\Controllers\AdminController::class, 'nikah']);

Route::resource('profil', App\Http\Controllers\ProfilController::class);

});

