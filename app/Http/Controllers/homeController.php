<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

use app\Http\Requests;
//use PDO;

//class Usuari{
//    public $name,$sn1,$sn2;
//
//}




class homeController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function index () {

        $user=$this -> getUser();
        //set->
        //$user = Auth::user();

        if ($this->userIsAuthenticated()){
            return view('home')->withUser($user);
        } else {
           return redirect('login');

        }
// user='{"name":"Marc","sn1":"Calafell"}'

    }

    private function getUser() {

        //opcio1
        //dd(json_encode($_GET['user']));
        //return json_decode($_GET['user']);

        //$id=$_GET['user'];
       // return User::findOrFail($id);

        json_encode($_COOKIE['user']);

    }

    private function setUserCookies(){
        $user = User::find(1);
        setCookies('user',json_encode($user));

    }


    private function userIsAuthenticated(){

        if (isset($_GET['user'])){
            return true;

        } else{
            return false;

        }



    }


}
