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
        $harga = $request->harga;
        $rupiahIntegerHarga = (int)str_replace(['Rp. ', ',', '.'], '', $harga);
        $data['harga'] = $rupiahIntegerHarga;
        Menu::create($data);
        return redirect('/menu');
    }
    public function editMenu(Request $request)
    {
        $id = $request->id_menu_edit;
        $harga = $request->edit_harga;
        $rupiahIntegerHarga = (int)str_replace(['Rp. ', ',', '.'], '', $harga);

        Menu::where('id', $id)->update([
            'nama_menu' => $request->edit_nama_menu,
            'kategori_menu' => $request->edit_kategori_menu,
            'harga' => $rupiahIntegerHarga,
            'status' => $request->edit_status,
        ]);
        return redirect('/menu');
    }
    public function hapusMenu(Request $request)
    {
        Menu::where('id', $request->id_menu_hapus)->delete();
        return redirect('/menu');
    }
}
