<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $userid =Auth::check()? Auth::user()-> id : null;
      $userPermissions = DB::table('accessuser')->where('idUser',$userid)->get();
      $rows1 = array();
      $rows2 = array();
      $rows3 = array();
      foreach ($userPermissions as $userPermission) {
        $datas1 = DB::table('pendaftar')->where('pilihan_satu',$userPermission->idDepartemen)->get();
        $datas2 = DB::table('pendaftar')->where('pilihan_dua',$userPermission->idDepartemen)->get();
        $datas3 = DB::table('pendaftar')->where('pilihan_tiga',$userPermission->idDepartemen)->get();
        foreach ($datas1 as $data1) {
            array_push($rows1,$data1);
        }
        foreach ($datas2 as $data2) {
            array_push($rows2,$data2);
        }
        foreach ($datas3 as $data3) {
            array_push($rows3,$data3);
        }
      }
      $rows = [
        'rows1' => $rows1,
        'rows2' => $rows2,
        'rows3' => $rows3
      ];
      // return $datas1;
      return view('home')->with('rows',$rows);
    }
}
