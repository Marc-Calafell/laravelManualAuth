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
<<<<<<< HEAD
=======

>>>>>>> 34143ee5ff6ddc5397a4109d92d80d337116d96b
Route::get('/', function () {
    return view('welcome');
});


<<<<<<< HEAD
Auth::logout();

Route::get('/home', 'HomeController@index');
Route::get('/login', 'LoginController@showLoginForm');
Route::post('/login', 'LoginController@login');
//Route::get('/register', 'RegisterController@register');
=======
Route::get('/login','loginController@login');
Route::get('/register','registerController@register');
//Route::get('/index','homeController@index');


//Route::get('/login', function () {
//    return view('auth.login');
//});

Route::get('/home', function () {
    return view('auth.home');
});

//Route::get('/register', function () {
//    return view('auth.register');
//});

>>>>>>> 34143ee5ff6ddc5397a4109d92d80d337116d96b
