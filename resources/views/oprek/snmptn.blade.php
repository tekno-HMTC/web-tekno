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
            <button type="submit" class="btn btn-secondary" style="margin-bottom: 12px;">
                {{ __('Pengumuman Hasil Seleksi Staff HMTC 2018 (PDF)') }}
            </button>
            <div class="alert alert-warning" role="alert" style="padding: 20px; margin-bottom: 24px;">
                Jadwal pencetakan ulang kartu pendaftran: xx Desember 2018 - xx Desember 2018
            </div>
            <div class="justify-content-md-center">
                <div class="card" style="padding: 20px;">
                    <h3 class="card-title">Masukkan Nomor Pendaftaran Staff HMTC</h3>
                    <div class="card-body" style="padding: 0px;">
                            <form class="text-left" id="Form" action="/SNMPTN" method="post" enctype="multipart/form-data"
                            onsubmit="return confirm('Apa anda yakin?');">
                            @csrf
                            <div class="form-group ">
                                <label>Nomor Pendaftaran</label>
                                <input name="nrp" type="text" class="form-control" required>
                                <small id="emailHelp" class="form-text text-muted">No. Pendaftaran Staff HMTC: 4 digit, tertera pada KTM anda (halah 4 digit terakhir NRP)</small>
                            </div>
                            <div class="form-row">
                                <label style="width: 100%;">Tanggal Lahir</label>
                                <div class="col-1">
                                    <input type="text" class="form-control" placeholder="Tgl">
                                </div>
                                <p style="padding-top: 8px;">/</p>
                                <div class="col-1">
                                    <input type="text" class="form-control" placeholder="Bln">
                                </div>
                                <p style="padding-top: 8px;">/</p>
                                <div class="col-1">
                                    <input type="text" class="form-control" placeholder="Tahun">
                                </div>
                                <small id="emailHelp" class="form-text text-muted" style="width: 100%;">Tgl.(1-31)/Bln.(1-12)/Tahun</small>
                            </div>
                            <div class="form-group mb-0" style="margin-top: 16px;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Lihat Hasil Seleksi') }}
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