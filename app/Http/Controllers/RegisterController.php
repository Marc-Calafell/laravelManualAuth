<?php

namespace App\Http\Controllers;

use App\Auth\Managers\AuthManager;
use App\ManualAuth\Guard;
use App\User;
use Hash;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

/**
 * Class RegisterController
 * @package App\Http\Controllers
 */
class RegisterController extends Controller {

//    protected $guard;
//
//    /**
//     * RegisterController constructor.
//     * @param $guard
//     */
//    public function __construct($guard) {
//        $this->guard = $guard;
//
//    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register() {
        return view('auth.register');
    }

    public function showRegister() {
        dd($_POST);

    }

//    /**
//     * @param array $data
//     * @return mixed
//     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|max:255',
//            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|min:8|confirmed',
//            'terms' => 'required',
//        ]);
//    }
//
//    /**
//     * @param array $data
//     * @return User
//     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
//    }
}
