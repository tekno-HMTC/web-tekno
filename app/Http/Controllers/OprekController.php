<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Pendaftar;
use App\PengurusHarian;
use Excel;

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
            'pilihan_tiga' => 'required',
            'alasan_pilihan_satu' => 'required',
            'file_foto' => 'required|image|mimes:jpeg,png,gif,webp|max:2048',
            'file_cv' => 'required|mimes:pdf|max:2048',
            'file_mbti' => 'required|mimes:pdf|max:2048',
            'post_line' => 'required',
            'portofolio' => 'mimes:zip,txt|max:2048',
            'file_transkrip.*' => 'required|mimes:doc,docx|max:2048'
        ]);

        if ($request->input('pilihan_satu') == $request->input('pilihan_dua')) {
            // return redirect('/')->with('error','Pilihan 1 dan 2 tidak boleh sama');
            return redirect()->back()->with('error','Pilihan 1 dan 2 tidak boleh sama');
        }

        if ($request->input('pilihan_satu') == $request->input('pilihan_tiga')) {
            // return redirect('/')->with('error','Pilihan 2 dan 3 tidak boleh sama');
            return redirect()->back()->with('error','Pilihan 2 dan 3 tidak boleh sama');
         }
      
        if ($request->input('pilihan_dua') == $request->input('pilihan_tiga') && $request->input('pilihan_tiga') != null) {
            // return redirect('/')->with('error','Pilihan 2 dan 3 tidak boleh sama');
            return redirect()->back()->with('error','Pilihan 2 dan 3 tidak boleh sama');
        }

        $pendaftar = new Pendaftar;
        $pendaftar->nama = $request->input('nama');
        $pendaftar->nrp = $request->input('nrp');
        $pendaftar->pilihan_satu = $request->input('pilihan_satu');
        $pendaftar->alasan_pilihan_satu = $request->input('alasan_pilihan_satu');
        $pendaftar->pilihan_dua = $request->input('pilihan_dua');
        $pendaftar->alasan_pilihan_dua = $request->input('alasan_pilihan_dua');
        $pendaftar->pilihan_tiga = $request->input('pilihan_tiga');
        $pendaftar->alasan_pilihan_tiga = $request->input('alasan_pilihan_tiga');
        $pendaftar->file_foto = $request->file('file_foto')->store('public/files');
        $pendaftar->file_cv = $request->file('file_cv')->store('public/files');
        $pendaftar->file_mbti = $request->file('file_mbti')->store('public/files');
        $pendaftar->post_line = $request->input('post_line');
        $pendaftar->file_transkrip = $request->file('file_transkrip')->store('public/files');
        $pendaftar->status = false;
        $pendaftar->departemen = 0;
        $pendaftar->departemen_nama = '';
        
        if ($request->file('portofolio') != null) {
            $pendaftar->portofolio = $request->file('portofolio')->store('public/files');
        } else {
            $pendaftar->portofolio = null;
        }

        $pendaftar->save();

        return redirect('/oprek/daftar')->with('success','Hehe udah gitu aja sih :) Ditunggu kabar selanjutnya ya');
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
                $staff = DB::table('pendaftar')->where('departemen', $departemenID)->get();
                
                $rows = [
                    'rows1' => $staff
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

    public function excel()
    {
        $data = DB::table('pendaftar')->orderBy('nrp', 'asc')->get()->toArray();
        $array[] = array('nama', 'nrp', 'pilihan_satu', 'alasan_pilihan_satu', 'pilihan_dua', 'alasan_pilihan_dua', 'pilihan_tiga', 'alasan_pilihan_tiga');
    
        foreach($data as $item) {
            $array[] = array(
                'nama' => $item->nama, 
                'nrp' => $item->nrp,
                'pilihan_satu' => $item->pilihan_satu, 
                'alasan_pilihan_satu' => $item->alasan_pilihan_satu, 
                'pilihan_dua' => $item->pilihan_dua, 
                'alasan_pilihan_dua' => $item->alasan_pilihan_dua, 
                'pilihan_tiga' => $item->pilihan_tiga, 
                'alasan_pilihan_tiga' => $item->alasan_pilihan_tiga);
        }

        Excel::create('Pendaftar', function($excel) use ($array){
            $excel->setTitle('Pendaftar');
            $excel->sheet('Pendaftar', function($sheet) use ($array)
            {
                $sheet->fromArray($array, null, 'A1', false, false);
            });
        })->download('xlsx');
    }
}
