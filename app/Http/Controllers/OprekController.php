<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Pendaftar;
use App\PengurusHarian;

class OprekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('max_execution_time', 0);
        $this->validate($request, [
            'nama' => 'required',
            'nrp' => 'required',
            'pilihan_satu' => 'required',
            'pilihan_dua' => 'required',
            'alasan_pilihan_satu' => 'required',
            'file_foto' => 'required|image|mimes:jpeg,png,gif,webp|max:2048',
            'file_cv' => 'required|mimes:pdf|max:2048',
            'portofolio' => 'mimes:zip,txt|max:2048',
        ]);

        if ($request->input('pilihan_satu') == $request->input('pilihan_dua')) {
            return redirect()->back()->with('error','Pilihan 1 dan 2 tidak boleh sama');
        }

        $pendaftar = new Pendaftar;
        $pendaftar->nama = $request->input('nama');
        $pendaftar->nrp = $request->input('nrp');
        $pendaftar->pilihan_satu = $request->input('pilihan_satu');
        $pendaftar->alasan_pilihan_satu = $request->input('alasan_pilihan_satu');
        $pendaftar->pilihan_dua = $request->input('pilihan_dua');
        $pendaftar->alasan_pilihan_dua = $request->input('alasan_pilihan_dua');
        $pendaftar->file_foto = $request->file('file_foto')->store('public/files');
        $pendaftar->file_cv = $request->file('file_cv')->store('public/files');
        $pendaftar->status = false;
        $pendaftar->departemen = 0;
        $pendaftar->departemen_nama = '';
        
        if ($request->file('portofolio') != null) {
            $pendaftar->portofolio = $request->file('portofolio')->store('public/files');
        } else {
            $pendaftar->portofolio = null;
        }

        $pendaftar->save();

        return redirect('/oprek/daftar')->with('success','Terima kasih telah mendaftar menjadi staf magang HMTC Garang! Ditunggu kabar selanjutnya ya');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function showResult()
    {
        $isLogin = Session::get('login');

        if ($isLogin) 
        {
            $departemenID = Session::get('id');

            if ($departemenID != 11) {
                $staff_pilihan_satu = DB::table('pendaftar')->where('pilihan_satu', $departemenID)->get();
                $staff_pilihan_dua = DB::table('pendaftar')->where('pilihan_dua', $departemenID)->get();

                $rows = [
                    'rows1' => $staff_pilihan_satu,
                    'rows2' => $staff_pilihan_dua
                  ];
    
                return view('oprek.home')->with('rows', $rows);
            } else {
                $pendaftar_total = DB::table('pendaftar')->get();

                $rows = [
                    'rows1' => $pendaftar_total
                ];

                return view('oprek.homekhususnondep')->with('rows', $rows);
            }
        }
        else
        {
            return redirect('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('pendaftar')
            ->where('nrp', $id)
            ->update(['status' => 1, 'departemen' => Session::get('id')]);

        return redirect('oprek/hasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pendaftar')->where('id', $id)->delete();

        return redirect('oprek/hasil');
    }
}
