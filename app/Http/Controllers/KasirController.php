<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = User::latest()->get();
        return view('admin.kasir.kasir', ['kasirs' => $kasir]);
    }
    public function tambahKasir(Request $request)
    {

        $data = $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        if ($request->password) {
            $data['password'] = Hash::make($data['password']);
        }
        User::create($data);
        return redirect('/kasir');
    }
    public function editKasir(Request $request)
    {
        $id = $request->id_kasir_edit;
        User::where('id', $id)->update([
            'nama_lengkap' => $request->edit_nama_lengkap,
            'username' => $request->edit_username,
            'role' => $request->edit_role,
        ]);
        return redirect('/kasir');
    }
    public function hapusKasir(Request $request)
    {
        $id = $request->id_kasir_hapus;
        User::where('id', $id)->delete();
        return redirect('/kasir');
    }
}
