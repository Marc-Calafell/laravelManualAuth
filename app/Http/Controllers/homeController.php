<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use PDO;

//class Usuari{
//    public $name,$sn1,$sn2;
//
//}




class homeController extends Controller
{
    function index () {

        if(auth::check()) {

            $user = User::find(1);
            return view('home')
                ->withUser($user);
        } else{
            $user=new \stdClass();
            $user->name = "asdasd";
            return view('auth.home');

        }


    }
}
