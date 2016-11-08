<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    /**
     *
     */
    public function showRegister()
    {
        var_dump($_POST);



    }
}
