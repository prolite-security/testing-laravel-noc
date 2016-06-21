<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlogin', function () {
    return view('userlogin');
});
/*Route::get('/userlogin', function () {
    echo "Viene del home a logueo como Operador/Coordinador NOC"; /*Recuerda cambiar el echo por return view (userlogin.blade.php) que debe crear*/
/*});
*/


Route::auth();

Route::get('/home', 'HomeController@index');
