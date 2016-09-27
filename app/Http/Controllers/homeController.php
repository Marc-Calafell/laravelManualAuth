<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

//class Usuari{
//    public $name,$sn1,$sn2;
//
//}


class homeController extends Controller
{
    function index () {
       // $data= ['username'=>'Marc'];
        $user= User::find();


        //return view('auth.home')-> withUsername($data['username']);
        return view('auth.home')-> withUsername($user);
    }
}
