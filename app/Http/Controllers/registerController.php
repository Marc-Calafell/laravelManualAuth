<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class registerController extends Controller
{
    function register () {
        return view('auth.register');
    }
}
