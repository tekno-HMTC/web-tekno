<?php

use function foo\func;
use App\Http\Controllers\ResultController;

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

Route::prefix('tekno')->group(function () {
    Route::get('login', 'HomeController@login');

    Route::prefix('magang')->group(function () {
        Route::get('/', function () 
        {
            return view('oprek.index');
        });

        Route::get('dashboard', 'OprekController@showResult');
        Route::get('ganen', 'ResultController@ganen');

        Route::get('hasil', 'ResultController@snmptn');
        Route::get('hasil/dashboard', 'ResultController@dashboard');
    });

    Route::post('FormOprec','OprekController@store');
    Route::post('LoginPH','HomeController@loginPost');
    Route::post('SNMPTN', 'ResultController@loadResult');
    Route::post('Inject', 'ResultController@inject');
});