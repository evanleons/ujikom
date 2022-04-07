<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Iluminate\Support\Facades\Hash;

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
        $validatedData = $request->validate([
            'nik' => 'required||max:16|min:16|unique:users',
            'name' => 'required|max:255|unique:users',
            'password' => 'required|min:8'
        ]);

        $validatedData['password'] = FacadesHash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('berhasil', 'Registrasi berhasil! Silahkan Login');

        return redirect('/login');
    }
}
