<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('app.auth.register', [
            "title" => "Register",
            "active" => "login",
        ]);
    }
}
