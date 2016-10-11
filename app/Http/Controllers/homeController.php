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

        $user=$this -> getUser();


        return view('home')->withUser($user);


    }

    private function getUser() {

        //opcio1
        return $_GET['user'];

    }
}
