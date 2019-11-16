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
    Route::get('staff', 'OprekController@showResult');
    Route::get('ganen', 'ResultController@ganen');

    Route::get('magang', function () 
    {
        return view('oprek.index');
    });

    Route::post('FormOprec','OprekController@store');
    Route::post('LoginPH','HomeController@loginPost');
    Route::post('SNMPTN', 'ResultController@loadResult');
    Route::post('Inject', 'ResultController@inject');
});