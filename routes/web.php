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
    return view('oprek.prank');
    //return view('oprek.index')
});

Route::get('/oprek/test', function () 
{
    return view('oprek.index');
});

Route::get('/oprek/hasil', 'FormWebOprecController@showResult');
Route::get('/oprek/hasil/remove/{id}', 'FormWebOprecController@destroy');
Route::get('/oprek/hasil/excel', 'FormWebOprecController@excel')->name('oprek.hasil.excel');

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('screening', function ()
{
    return Redirect::to("files/JADWAL_SCREENING_CALON_STAFF_HMTC_1819.pdf");
});

Route::post('FormOprec','FormWebOprecController@store');
Route::post('LoginPH','HomeController@loginPost');

Route::post('Catch/{id}', 'FormWebOprecController@update');
