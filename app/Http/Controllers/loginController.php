<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginController extends Controller
{
    function login () {
        return view('auth.login');
    }


}
