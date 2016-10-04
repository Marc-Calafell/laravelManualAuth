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
       // $user= User::find();


        //return view('auth.home')-> withUsername($data['username']);
       // return view('auth.home')-> withUsername($user);

        $user->name = "asdasd";
        $pdo = new PDO('sqlite:/home/marc/Codi/laravelManualAuth/database/database.sqlite');
        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
        $query->execute();
        $row = $query->fetch();
        dd($row);

        $user = new \stdClass();
        $user->name = "Marc";
        $user->sn1 = "Calafell";
        return view('home')
            ->withUser($user);

    }
}
