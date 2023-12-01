<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::latest()->get();

        return view('admin.kategori_menu.kategori_menu', ['kategoris' => $kategori]);
    }
    public function tambahKategori(Request $request)
    {
        $data = $request->validate(['nama_kategori' => 'required']);
        Kategori::create($data);
        return redirect('/kategori');
    }
    public function editKategori(Request $request)
    {
        $id = $request->id_kategori;

        Kategori::where('id', $id)->update([
            'nama_kategori' => $request->edit_nama_kategori,
        ]);
        return redirect('/kategori');
    }
    public function hapusKategori(Request $request)
    {
        Kategori::where('id', $request->id_kategori_hapus)->delete();
        return redirect('/kategori');
    }
}
