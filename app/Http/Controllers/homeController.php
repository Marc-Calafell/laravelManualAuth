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
       // $data= ['username'=>'Marc'];
       // $user= User::find();


        //return view('auth.home')-> withUsername($data['username']);
       // return view('auth.home')-> withUsername($user);

       // $user->name = "asdasd";
      //  $pdo = new PDO('sqlite:/home/marc/Codi/laravelManualAuth/database/database.sqlite');
     //   $query = $pdo->prepare('SELECT * FROM users WHERE id=77');
       // $query->execute();
       // $row = $query->fetch();
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
