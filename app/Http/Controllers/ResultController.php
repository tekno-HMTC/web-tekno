<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Pendaftar;

class ResultController extends Controller
{
    public function snmptn() {
        return view('oprek.snmptn');
    }

    public function dashboard() {
        return view('oprek.hasil');
    }

    public function loadResult(Request $request)
    {
        $nrp = $request->nrp;

        $data = Pendaftar::where('nrp', $nrp)->first();
        Session::put('nama', $data->nama);
        Session::put('nrp', $data->nrp);
        Session::put('status', $data->status);
        Session::put('departemen', $data->departemen_nama);

        return redirect('hasil/dashboard');
    }
}
