<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;
class FormWebOprecController extends Controller
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
      $this->validate($request,[
        'nama' => 'required',
        'nrp' => 'required',
        'pilihan1' => 'required',
        'alasanPilihan1' => 'required'
      ]);

      if ($request->input('pilihan1') == $request->input('pilihan2')) {
        return redirect('/')->with('error','Pilihan 1 dan 2 tidak boleh sama');
      }
      if ($request->input('pilihan1') == $request->input('pilihan3')) {
        return redirect('/')->with('error','Pilihan 2 dan 3 tidak boleh sama');
      }
      if ($request->input('pilihan2') == $request->input('pilihan3') && $request->input('pilihan3') != null) {
        return redirect('/')->with('error','Pilihan 2 dan 3 tidak boleh sama');
      }
      $pendaftar = new Pendaftar;
      $pendaftar->nama = $request->input('nama');
      $pendaftar->nrp = $request->input('nrp');
      $pendaftar->pilihan1 = $request->input('pilihan1');
      $pendaftar->alasanPilihan1 = $request->input('alasanPilihan1');
      $pendaftar->pilihan2 = $request->input('pilihan2');
      $pendaftar->alasanPilihan2 = $request->input('alasanPilihan2');
      $pendaftar->pilihan3 = $request->input('pilihan3');
      $pendaftar->alasanPilihan3 = $request->input('alasanPilihan3');
      $pendaftar->save();

      return redirect('/')->with('success','Terima Kasih telah Mendaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
