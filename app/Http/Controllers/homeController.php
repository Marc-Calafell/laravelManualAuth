<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use app\Http\Requests;
use PDO;

//class Usuari{
//    public $name,$sn1,$sn2;
//
//}




class homeController extends Controller
{
    function index () {

        $user=$this -> getUser();

        if(this->userIsAuthenticated()){

            return view('home')->withUser($user);
        } else {
           return redirect('login');

        }




    }

    private function getUser() {

        //opcio1
        return $_GET['user'];

    }

    private function userIsAuthenticated(){

        if (isset($_GET['user'])){
            return true;

        } else{
            return false;

        }



    }


}
