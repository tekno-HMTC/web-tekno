<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\PengurusHarian;

class HomeController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('login')->with('alert', 'Ea');
        }
        else {
            return view('staff');
        }
    }

    public function login() {
        return view('auth.login');
    }

    public function loginPost(Request $request) {
        $departemen = $request->departemen;
        $password = $request->password;

        $data = PengurusHarian::where('departemen', $departemen)->first();

        if($data != null && $data->count() > 0){
            if($password == $data->password){
                Session::put('id', $data->id);
                Session::put('departemen', $data->departemen);
                Session::put('login', TRUE);

                return redirect('staff');
            }
            else {
                return redirect('login')->with('alert','Invalid kredensial');
            }
        }
        else {
            return redirect('login')->with('alert','Invalid kredensial');
        }
    }
}
