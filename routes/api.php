<?php

use App\Models\Menu;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/kategori/{id}', function ($id) {
    $data =  Kategori::where('id', $id)->first();
    return response()->json($data);
});
Route::get('/menu/{id}', function ($id) {
    $data =  Menu::where('id', $id)->first();
    return response()->json($data);
});
Route::get('/kasir/{id}', function ($id) {
    $data =  User::where('id', $id)->first();
    return response()->json($data);
});
