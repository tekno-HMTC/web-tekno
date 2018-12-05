@extends('master')

@section('title', 'Oprek')

@section('css')
<link rel="stylesheet" href="{{ asset('css/oprek.css') }}">
@endsection

@section('body')
<div class="position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>
    @endif
    {{-- <style>
        *{border: 1px #000 solid}
    </style> --}}
    <div class="content" style="padding-top: 80px">
        <h1 class="display-4">hehe</h1>
        <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
            @include('layout.message')
            <div class="justify-content-md-center">
                <div class="card">
                    <div class="card-body">
                        <form class="text-left" id="Form" action="/FormOprec" method="post" enctype="multipart/form-data"
                            onsubmit="return confirm('Do you really want to submit the form?');">
                            @csrf
                            <div class="form-group ">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" required>
                                <small id="emailHelp" class="form-text text-muted">Gunakan nama lengkap</small>
                            </div>
                            <div class="form-group">
                                <label class="text-left"> NRP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">0511174000</div>
                                    </div>
                                    <input name="nrp" type="text" class="form-control" id="inlineFormInputGroup"
                                        placeholder="XXXX" maxlength="4" pattern="\d{4}" required>

                                </div>
                                <small id="emailHelp" class="form-text text-muted">Masukkan 4 angka belakang NRP</small>
                            </div>
                            <div class="card bg-warning text-center">
                                <label class="bg-warning" style="margin:0px">Pilih Urut Berdasarkan Minat Pendaftar</label>
                            </div>
                            <select class="form-control mr-sm-2" onchange="pindahTab()" id="selectPilihan" style="margin-top:8px">
                                <option value="1">Pilihan 1</option>
                                <option value="2">Pilihan 2</option>
                                <option value="3">Pilihan 3</option>
                            </select>
                            <div id="pilihan1" style="display:block">
                                <div class="form-group">
                                    <label>Departemen Pilihan Pertama</label>
                                    <select name="pilihan_satu" class="select-departemen form-control mr-sm-2" id="selectPilihan1"
                                        onchange="tampilkanPenjelasan1()" required>
                                        <option value="" style="display:none">Pilih Salah Satu</option>
                                        <option value="1">Tekno</option>
                                        <option value="2">Dagri</option>
                                        <option value="3">Hublu</option>
                                        <option value="4">KDPM</option>
                                        <option value="5">Pengpro</option>
                                        <option value="6">Medfo</option>
                                        <option value="7">Kesma</option>
                                        <option value="8">Sosmas</option>
                                        <option value="9">KWU</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alasan Memilih Departemen Pilihan Pertama</label>
                                    <textarea name="alasan_pilihan_satu" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3" required></textarea>
                                </div>
                            </div>
                            <div id="pilihan2" style="display:none">
                                <div class="form-group">
                                    <label>Departemen Pilihan Kedua</label>
                                    <select name="pilihan_dua" class="select-departemen form-control mr-sm-2" id="selectPilihan2"
                                        onchange="tampilkanPenjelasan2()">
                                        <option value="" style="display:none">Pilih Salah Satu</option>
                                        <option value="1">Tekno</option>
                                        <option value="2">Dagri</option>
                                        <option value="3">Hublu</option>
                                        <option value="4">KDPM</option>
                                        <option value="5">Pengpro</option>
                                        <option value="6">Medfo</option>
                                        <option value="7">Kesma</option>
                                        <option value="8">Sosmas</option>
                                        <option value="9">KWU</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alasan Memilih Departemen Pilihan Kedua</label>
                                    <textarea name="alasan_pilihan_dua" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                            </div>
                            <div id="pilihan3" style="display:none">
                                <div class="form-group">
                                    <label>Departemen Pilihan Ketiga</label>
                                    <select name="pilihan_tiga" class="select-departemen form-control mr-sm-2" id="selectPilihan3"
                                        onchange="tampilkanPenjelasan3()">
                                        <option value="" style="display:none">Pilih Salah Satu</option>
                                        <option value="1">Tekno</option>
                                        <option value="2">Dagri</option>
                                        <option value="3">Hublu</option>
                                        <option value="4">KDPM</option>
                                        <option value="5">Pengpro</option>
                                        <option value="6">Medfo</option>
                                        <option value="7">Kesma</option>
                                        <option value="8">Sosmas</option>
                                        <option value="9">KWU</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alasan Memilih Departemen Pilihan Ketiga</label>
                                    <textarea name="alasan_pilihan_tiga" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Link Post Line</label>
                                <input name="post_line" type="text" class="form-control" required>
                                <small id="emailHelp" class="form-text text-muted">Post harus public</small>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <small id="emailHelp" class="text-muted">Format file .png atau .jpg</small>
                                <input type="file" name="file_foto">
                                <span class="help-block text-danger">{{ $errors->first('file_foto') }}</span>
                            </div>
                            <div class="form-group">
                                <label>File CV</label>
                                <small id="emailHelp" class="text-muted">Format file .pdf</small>
                                <input type="file" name="file_cv">
                                <span class="help-block text-danger">{{ $errors->first('file_cv') }}</span>
                            </div>
                            <div class="form-group">
                                <label>File MBTI</label>
                                <small id="emailHelp" class="text-muted">Format file .pdf</small>
                                <input type="file" name="file_mbti">
                                <span class="help-block text-danger">{{ $errors->first('file_mbti') }}</span>
                            </div>
                            <div id="portofolio" style="display: none;">
                                <div class="card bg-warning text-center" style="margin-bottom: 16px;">
                                    <label class="bg-warning" style="margin:0px">Form Khusus Pilihan Medfo</label>
                                </div>
                                <div class="form-group">
                                    <label>Portofolio</label>
                                    <small id="emailHelp" class="text-muted">Format file .zip max 10MB</small>
                                    <input type="file" name="portofolio">
                                    <span class="help-block text-danger">{{ $errors->first('portofolio') }}</span>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
    $('#selectPilihan').on('change', function() {
        $('#portofolio').hide();
    })

    $('#selectPilihan1').on('change', function() {
        if ($(this).val() == '6') {
            $('#portofolio').show();
        }
    })

    $('#selectPilihan2').on('change', function() {
        if ($(this).val() == '6') {
            $('#portofolio').show();
        }
    })

    $('#selectPilihan3').on('change', function() {
        if ($(this).val() == '6') {
            $('#portofolio').show();
        }
    })
</script>
@endsection