<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Iluminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
                'nik' => 'required',
                'password' => 'required'
        ]);

        if(FacadesAuth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login gagal!');
        // dd('berhasil login!');

    }

    public function logout(Request $request)
    {
            FacadesAuth::logout();

            
    }
}
