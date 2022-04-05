<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }



    public function store(Request $request)
    {
        // return request()->all();
        $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required|max:16|min:16|unique:users'
        ]);

        dd('registrasi berhasil!!');
    }
}
