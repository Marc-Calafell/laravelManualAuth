<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;
use App\Http\Requests;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request) {







        /*
        try {
            $user = User::where(['email' => $request->input('email')])->firstOrFail();

        } catch (NotFoundHttpException $e){
            return redirect('login');

        }

        if($user->pasword == Hash::make($request->input('password')) ) {
            return redirect('home');

        }else{
            return redirect('login');

        }


        echo 'Holas';*/



    }

}
