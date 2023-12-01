<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;

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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
});
Route::get('/menu', function () {
    return view('admin.daftar_menu.daftar_menu');
});

//menu
Route::get('/menu', [MenuController::class, 'index']);
Route::post('/menu', [MenuController::class, 'tambahMenu']);
Route::post('/edit_menu', [MenuController::class, 'editMenu']);
Route::post('/hapus_menu', [MenuController::class, 'hapusmneu']);

//kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'tambahKategori']);
Route::post('/edit_kategori', [KategoriController::class, 'editKategori']);
Route::post('/hapus_kategori', [KategoriController::class, 'hapusKategori']);


Route::get('/kasir', function () {
    return view('admin.kasir.kasir');
});
