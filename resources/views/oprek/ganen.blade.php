@extends('master')

@section('title', 'Pengumuman Online Staff HMTC 2018/2019')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/oprek.css') }}">
@endsection

@section('body')
<div class="position-ref full-height yha">
    <div style="padding-top: 50px">
        <div class="container" style="padding: 40px;">
            <div class="justify-content-md-center">
                <div class="card" style="padding: 20px;">
                    <h3 class="card-title">Portal Khusus Inject Data</h3>
                    <div class="card-body" style="padding: 0px;">
                            <form class="text-left" id="Form" action="/Inject" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <label>NRP</label>
                                <input name="nrp" type="text" class="form-control" required>
                                <small id="emailHelp" class="form-text text-muted">NRP Pendaftar</small>
                            </div>
                            <div class="form-group ">
                                <label>ID Departemen</label>
                                <input name="id_departemen" type="text" class="form-control" required>
                                <small id="emailHelp" class="form-text text-muted">ID Departemen</small>
                            </div>
                            <div class="form-group ">
                                <label>Nama Departemen</label>
                                <input name="nama_departemen" type="text" class="form-control" required>
                                <small id="emailHelp" class="form-text text-muted">Nama Departemen</small>
                            </div>
                            <div class="form-group mb-0" style="margin-top: 16px;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inject') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="alert alert-dark content" role="alert" style="margin-top: 8px;">
               Panitia Pusat Seleksi Staff HMTC ITS 2018 | Masalah? <i class="fab fa-line"></i> gsculerlor <i class="fab fa-discord"></i> Ganen#0124 <i class="fab fa-github-square"></i> gsculerlor
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
@endsection