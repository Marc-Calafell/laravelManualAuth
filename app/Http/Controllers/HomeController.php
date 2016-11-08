<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {

        // Passos controlador bàsic (glue/cola del model i vista)
        // 1) Aconseguir informació de l'usuari de la base de dades
        // 2) Mostrar vista home passant info de l'usuari

        $this->setUserCookie();

        //ESTAT
        if ($this->userIsAuthenticated()) {
            $user = $this->getUser();
            return view('home')
                ->withUser($user);
        } else {
            return redirect('login');
        }

//        '{"name" : "Tania"}'
    }

    private function setUserCookie()
    {
        $user = User::findOrFail(1);
        setcookie('user',$user->token);
    }

    private function getUser()
    {

        // Opció 1: query string $_GET
        $token = $_COOKIE['user'];
        return User::where(["token" => $token])->first();
    }
}
