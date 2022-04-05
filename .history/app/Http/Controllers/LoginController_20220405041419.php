<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Suppo

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

}
