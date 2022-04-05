<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Su

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

}
