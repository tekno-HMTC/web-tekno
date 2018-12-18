@extends('master')

@section('title', 'Pengumuman Online Staff HMTC 2018/2019')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/oprek.css') }}">
<style>
    img {
        max-height:100%;
        max-width:100%;
        height:auto;
        width:auto;
    }
</style>
@endsection

@section('body')
<div class="position-ref full-height yha">
    <div style="padding-top: 50px">
        <div class="container">
            <div class="content" style="padding: 20px; margin-bottom: 24px;">
               <h3><strong>PENGUMUMAN KELULUSAN STAFF HMTC 2018/2019</strong></h3>
            </div>
            <div class="justify-content-md-center">
                @if (Session::get('status') == 1 )
                    @include('layout.lolos')
                @else
                    @include('layout.gagal')
                @endif
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