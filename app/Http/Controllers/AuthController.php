<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $identitas = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($identitas)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended('dashboard');
            } elseif ($user->role === 'kasir') {
                return redirect()->intended('dashboard_kasir');
            }
            return redirect('login');
        }
        return redirect('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
