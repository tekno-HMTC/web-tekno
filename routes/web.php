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

Route::get('/oprek/hasil', 'OprekController@showResult');
Route::get('/oprek/hasil/remove/{id}', 'OprekController@destroy');
Route::get('/oprek/hasil/excel', 'OprekController@excel')->name('oprek.hasil.excel');

Route::get('hasil', 'ResultController@snmptn');
Route::get('hasil/dashboard', 'ResultController@dashboard');

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

Route::post('FormOprec','OprekController@store');
Route::post('LoginPH','HomeController@loginPost');
Route::post('SNMPTN', 'ResultController@loadResult');

Route::post('Catch/{id}', 'OprekController@update');
