<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'nik' => 'required|max:16|min:16|unique:users',
            'name' => 'required|max:255|unique:users'
        ]);

        User::create($validatedData);
    }
}
