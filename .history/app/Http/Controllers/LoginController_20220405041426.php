<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Fa

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

}
