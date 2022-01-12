<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('app.auth.login', [
            "title" => "Login",
            "active" => "login",
        ]);
    }
}
