<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardkasirController extends Controller
{
    public function index()
    {
        $daftar_menu = Menu::latest()->get();
        return view('kasir.dashboard.dashboard', ['menus' => $daftar_menu]);
    }
}
