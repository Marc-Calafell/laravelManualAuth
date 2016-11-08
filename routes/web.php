<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Clousures : Funcions anònimes
use App\User;

Route::get('/', function () {
    return view('welcome');
});

//$user = User::findOrFail(1);
//setcookie('user',$user->token);

Route::group(['middleware' => 'manualauth'], function () {
    Route::get('/tasques', function () {
        return view('tasques');
    });
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', 'LoginController@showLoginForm');
Route::post('/login', 'LoginController@login');

// PAS 1 -> Middleware -> Com protegir pàgines?

// PAS 2 -> User Providers -> Login / Register



////Auth::loginUsingId(1);
//
//Auth::logout();
//
//Route::get('/home', 'HomeController@index');
//
//Route::get('/register', 'RegisterController@register');

