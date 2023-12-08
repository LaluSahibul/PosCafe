<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardkasirController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KategoriController;

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

//authenticate
Route::get('/', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'prosesLogin']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/dashboard_kasir', [DashboardkasirController::class, 'index']);
Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
});

//menu
Route::get('/menu', [MenuController::class, 'index']);
Route::post('/menu', [MenuController::class, 'tambahMenu']);
Route::post('/edit_menu', [MenuController::class, 'editMenu']);
Route::post('/hapus_menu', [MenuController::class, 'hapusMenu']);

//kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'tambahKategori']);
Route::post('/edit_kategori', [KategoriController::class, 'editKategori']);
Route::post('/hapus_kategori', [KategoriController::class, 'hapusKategori']);

//kasir
Route::get('/kasir', [KasirController::class, 'index']);
Route::post('/kasir', [KasirController::class, 'tambahKasir']);
Route::post('/edit_kasir', [KasirController::class, 'editKasir']);
Route::post('/hapus_kasir', [KasirController::class, 'hapusKasir']);
