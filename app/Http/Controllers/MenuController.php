<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::latest()->get();
        $kategori = Kategori::latest()->get();

        return view('admin.daftar_menu.daftar_menu', ['menus' => $menu, 'kategoris' => $kategori]);
    }
    public function tambahMenu(Request $request)
    {
        $data = $request->validate([
            'nama_menu' => 'required',
            'kategori_menu' => 'required',
            'harga' => 'required',
            'status' => 'required',
        ]);
        Menu::create($data);
        return redirect('/menu');
    }
    public function editMenu(Request $request)
    {
        $id = $request->id_mneu;

        Menu::where('id', $id)->update([
            'nama_menu' => $request->edit_nama_kategori,
        ]);
        return redirect('/menu');
    }
    public function hapusMenu(Request $request)
    {
        Menu::where('id', $request->id_kategori_hapus)->delete();
        return redirect('/kategori');
    }
}
