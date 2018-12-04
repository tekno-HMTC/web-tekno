<?php

use function foo\func;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/login', 'HomeController@login');

Route::get('/oprek/daftar', function () 
{
    return view('oprek.index');
});

Route::get('/oprek', function () 
{
    return view();
});

Route::get('/oprek/hasil', 'FormWebOprecController@showResult');

Route::post('FormOprec','FormWebOprecController@store');
Route::post('LoginPH','HomeController@loginPost');
