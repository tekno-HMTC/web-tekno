@extends('master')

@section('title', 'Form Pendaftaran Staff Magang HMTC - ganen.moe')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/oprek.css') }}">
@endsection

@section('body')
<div class="position-ref full-height yha">
    <div class="content" style="padding-top: 80px">
        <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
            @include('layout.message')
            <div class="justify-content-md-center">
                <div class="card" style="padding: 20px">
                    <h3 class="card-title" style="padding-left: 20px; text-align: left;">Form Pendaftaran Staff Magang HMTC</h3>
                    <div class="card-body">
                        <form class="text-left" id="Form" action="/tekno/FormOprec" method="post" enctype="multipart/form-data"
                            onsubmit="return confirm('Do you really want to submit the form?');">
                            @csrf
                            <div class="card bg-warning text-center" style="margin-bottom:12px;">
                                <label class="bg-warning" style="margin:0px; color: white;">Form Data Diri</label>
                            </div>
                            <div class="form-group ">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" required>
                                <small id="emailHelp" class="form-text text-muted">Gunakan nama lengkap</small>
                            </div>
                            <div class="form-group">
                                <label class="text-left"> NRP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">0511184000</div>
                                    </div>
                                    <input name="nrp" type="text" class="form-control" id="inlineFormInputGroup"
                                        placeholder="XXXX" maxlength="4" pattern="\d{4}" required>

                                </div>
                                <small id="emailHelp" class="form-text text-muted">Masukkan 4 angka belakang NRP</small>
                            </div>
                            <div class="card bg-warning text-center" style="margin-bottom:12px;">
                                <label class="bg-warning" style="margin:0px; color: white;">Form Departemen Pilihan Pertama</label>
                            </div>
                            <div id="pilihan1" style="display:block">
                                <div class="form-group">
                                    <label>Departemen Pilihan Pertama</label>
                                    <select name="pilihan_satu" class="select-departemen form-control mr-sm-2" id="selectPilihan1"
                                        onchange="tampilkanPenjelasan1()" required>
                                        <option value="" style="display:none">Pilih Salah Satu</option>
                                        <option value="1">Departemen Teknologi</option>
                                        <option value="2">Departemen Dalam Negeri</option>
                                        <option value="3">Departemen Hubungan Luar</option>
                                        <option value="4">Departemen Kaderisasi dan Pemetaan</option>
                                        <option value="5">Departemen Pengembangan Profesi</option>
                                        <option value="6">Departemen Media Informasi</option>
                                        <option value="7">Departemen Kesejahteraan Mahasiswa</option>
                                        <option value="8">Departemen Sosial Masyarakat</option>
                                        <option value="9">Departemen Minat Bakat</option>
                                        <option value="10">Biro Kajian Strategis</option>
                                    </select>
                                </div>
                                <p id="deskripsidepartemen1" style="font-size: 16px;"></p>
                                <div class="form-group">
                                    <label>Alasan Memilih Departemen Pilihan Pertama</label>
                                    <textarea name="alasan_pilihan_satu" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3" required></textarea>
                                </div>
                                <div id="portofolioPilihan1" style="display: none;">
                                    <div class="form-group ">
                                        <label>Portofolio</label>
                                        <input name="portofolio_pilihan_1" type="text" class="form-control">
                                        <small id="portoHelp" class="form-text text-muted">Silahkan upload dimanapun dan salin link file disini (.zip)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-warning text-center" style="margin-bottom:12px;">
                                <label class="bg-warning" style="margin:0px; color: white;">Form Departemen Pilihan Kedua</label>
                            </div>
                            <div id="pilihan2" style="display:block">
                                <div class="form-group">
                                    <label>Departemen Pilihan Kedua</label>
                                    <select name="pilihan_dua" class="select-departemen form-control mr-sm-2" id="selectPilihan2"
                                        onchange="tampilkanPenjelasan2()">
                                        <option value="" style="display:none">Pilih Salah Satu</option>
                                        <option value="1">Departemen Teknologi</option>
                                        <option value="2">Departemen Dalam Negeri</option>
                                        <option value="3">Departemen Hubungan Luar</option>
                                        <option value="4">Departemen Kaderisasi dan Pemetaan</option>
                                        <option value="5">Departemen Pengembangan Profesi</option>
                                        <option value="6">Departemen Media Informasi</option>
                                        <option value="7">Departemen Kesejahteraan Mahasiswa</option>
                                        <option value="8">Departemen Sosial Masyarakat</option>
                                        <option value="9">Departemen Minat Bakat</option>
                                        <option value="10">Biro Kajian Strategis</option>
                                    </select>
                                </div>
                                <p id="deskripsidepartemen2" style="font-size: 16px;"></p>
                                <div class="form-group">
                                    <label>Alasan Memilih Departemen Pilihan Kedua</label>
                                    <textarea name="alasan_pilihan_dua" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                                <div id="portofolioPilihan2" style="display: none;">
                                    <div class="form-group ">
                                        <label>Portofolio</label>
                                        <input name="portofolio_pilihan_2" type="text" class="form-control">
                                        <small id="portoHelp" class="form-text text-muted">Silahkan upload dimanapun dan salin link file disini (.zip)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-warning text-center" style="margin-bottom:12px;">
                                <label class="bg-warning" style="margin:0px; color: white;">Form Pertanyaan Seputar Departemen Pilihanmu</label>
                            </div>
                            <div class="form-group">
                                <label>Apa saja yang kalian tau tentang departemen yang kalian pilih? Ngapain aja?</label>
                                <textarea name="question_dept_ngapain" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Proker-proker apa saja yang kalian tau tentang departemen yang kalian pilih?</label>
                                <textarea name="question_dept_proker" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Siapa saja fungsionaris yang kalian tau di departemen yang kalian pilih?</label>
                                <textarea name="question_dept_fungsionaris" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Apa yang kalian harapkan dari staff magang HMTC?</label>
                                <textarea name="question_magang_harapan" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="card bg-warning text-center" style="margin-bottom:12px;">
                                <label class="bg-warning" style="margin:0px; color: white;">Form Kelengkapan Berkas</label>
                            </div>
                            <div class="form-group ">
                                <label>Foto Ekspresif Pake Jaket Biru</label>
                                <input name="file_foto" type="text" class="form-control" required>
                                <small id="fotoHelp" class="form-text text-muted">Silahkan upload dimanapun dan salin link file disini (.png, .jpeg, .jpg)</small>
                            </div>
                            <div class="form-group ">
                                <label>File CV</label>
                                <input name="file_cv" type="text" class="form-control" required>
                                <small id="cvHelp" class="form-text text-muted">Silahkan upload dimanapun dan salin link file disini (.pdf)</small>
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
            <div class="alert alert-dark" role="alert" style="margin-top: 8px;">
               Masalah? <i class="fab fa-line"></i> gsculerlor <i class="fab fa-discord"></i> Ganen#0124 <i class="fab fa-github-square"></i> gsculerlor
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
        if ($(this).val() == '1') {
            $('#deskripsidepartemen1').text("Departemen Teknologi bertujuan untuk membangun komunitas yang inovatif dan memiliki semangat berkontribusi dalah pengembangan teknologi dan informasi khususnya di TC");
        } else if ($(this).val() == '2') {
            $('#deskripsidepartemen1').text("Departemen Dalam Negeri atau DAGRI adalah departemen yang menaungi anggota hmtc untuk menumbuhkan rasa peduli terhadap sesama sehingga tercipta suasana kekeluargaan dalam HMTC.");
        } else if ($(this).val() == '3') {
            $('#deskripsidepartemen1').text("Departemen Hubungan Luar adalah departemen yang menjadi jembatan di antara stakeholder-stakeholder HMTC seperti Ormawa ITS & Luar ITS, Perusahaan, Alumni,dan forum-forum Informatika di Indonesia, serta menyediakan informasi dan wadah mengenai jurusan Informatika ITS bagi teman-teman SMA/K/ Umum di seluruh Indonesia.");
        } else if ($(this).val() == '4') {
            $('#deskripsidepartemen1').text("KDPM atau Kaderisasi dan Pemetaan adalah departemen mulia yang bertanggung jawab atas pengembangan sumber daya manusia HMTC. KDPM mengurus langsung mahasiswa tahun pertama dalam proses adaptasi, penanaman nilai-nilai yang bermasyarakat, persiapan memasuki himpunan dan menjalankan fungsi pemetaan minat dan bakat.");
        } else if ($(this).val() == '5') {
            $('#deskripsidepartemen1').text("Departemen Pengembangan Profesi adalah salah satu departemen HMTC yang memfasilitasi warga HMTC di bidang softskill. Departemen ini ditujukan untuk mempersiapkan mahasiswa TC dalam memasuki dunia kerja. Departemen ini fokus pada pemgembangan mahasiswa tingkat 2, 3, dan 4.");
        } else if ($(this).val() == '6') {
            $('#deskripsidepartemen1').text("Departemen Media dan Informasi adalah ujung tombak HMTC dalam penyebaran informasi, serta sebagai wadah bagi mahasiswa informatika belajar dan menemukan hal baru dalam bidang media dan informasi");
        } else if ($(this).val() == '7') {
            $('#deskripsidepartemen1').text("Departemen Kesejahteraan Mahasiswa atau Kesma bertujuan untuk menjaga dan meningkatkan well being seluruh warga HMTC melalui berbagai bidang seperti advokasi, akademik dan kesehatan.");
        } else if ($(this).val() == '8') {
            $('#deskripsidepartemen1').text("Departemen Sosial Masyarakat HMTC adalah departemen yang mewadahi mahasiswa Informatika untuk mengabdi kepada masyarakat dengan kepedulian sosial dan aksi nyata.");
        } else if ($(this).val() == '9') {
            $('#deskripsidepartemen1').text("Departemen Minat dan Bakat adalah departemen dimana mahasiswa yang memiliki minat dan bakat non-akademik dapat menyalurkannya. Departemen ini memiliki beberapa klub di bidang non-akademik, seperti olahraga, games, kewirausahaan, dll.");
        } else if ($(this).val() == '10') {
            $('#deskripsidepartemen1').text("Kajian Strategis atau yang bisa disebut sebagai Kastrat adalah sebuah biro yang mengkaji berbagai isu-isu yang berkembang di dunia IT, ITS, dan juga nasional yang berbasis dari data.");
        } 

        if ($(this).val() == '6') {
            $('#portofolioPilihan1').show();
        } else {
            $('#portofolioPilihan1').hide();
        }
    })

    $('#selectPilihan2').on('change', function() {
        if ($(this).val() == '1') {
            $('#deskripsidepartemen2').text("Departemen Teknologi bertujuan untuk membangun komunitas yang inovatif dan memiliki semangat berkontribusi dalah pengembangan teknologi dan informasi khususnya di TC");
        } else if ($(this).val() == '2') {
            $('#deskripsidepartemen2').text("Departemen Dalam Negeri atau DAGRI adalah departemen yang menaungi anggota hmtc untuk menumbuhkan rasa peduli terhadap sesama sehingga tercipta suasana kekeluargaan dalam HMTC.");
        } else if ($(this).val() == '3') {
            $('#deskripsidepartemen2').text("Departemen Hubungan Luar adalah departemen yang menjadi jembatan di antara stakeholder-stakeholder HMTC seperti Ormawa ITS & Luar ITS, Perusahaan, Alumni,dan forum-forum Informatika di Indonesia, serta menyediakan informasi dan wadah mengenai jurusan Informatika ITS bagi teman-teman SMA/K/ Umum di seluruh Indonesia.");
        } else if ($(this).val() == '4') {
            $('#deskripsidepartemen2').text("KDPM atau Kaderisasi dan Pemetaan adalah departemen mulia yang bertanggung jawab atas pengembangan sumber daya manusia HMTC. KDPM mengurus langsung mahasiswa tahun pertama dalam proses adaptasi, penanaman nilai-nilai yang bermasyarakat, persiapan memasuki himpunan dan menjalankan fungsi pemetaan minat dan bakat.");
        } else if ($(this).val() == '5') {
            $('#deskripsidepartemen2').text("Departemen Pengembangan Profesi adalah salah satu departemen HMTC yang memfasilitasi warga HMTC di bidang softskill. Departemen ini ditujukan untuk mempersiapkan mahasiswa TC dalam memasuki dunia kerja. Departemen ini fokus pada pemgembangan mahasiswa tingkat 2, 3, dan 4.");
        } else if ($(this).val() == '6') {
            $('#deskripsidepartemen2').text("Departemen Media dan Informasi adalah ujung tombak HMTC dalam penyebaran informasi, serta sebagai wadah bagi mahasiswa informatika belajar dan menemukan hal baru dalam bidang media dan informasi");
        } else if ($(this).val() == '7') {
            $('#deskripsidepartemen2').text("Departemen Kesejahteraan Mahasiswa atau Kesma bertujuan untuk menjaga dan meningkatkan well being seluruh warga HMTC melalui berbagai bidang seperti advokasi, akademik dan kesehatan.");
        } else if ($(this).val() == '8') {
            $('#deskripsidepartemen2').text("Departemen Sosial Masyarakat HMTC adalah departemen yang mewadahi mahasiswa Informatika untuk mengabdi kepada masyarakat dengan kepedulian sosial dan aksi nyata.");
        } else if ($(this).val() == '9') {
            $('#deskripsidepartemen2').text("Departemen Minat dan Bakat adalah departemen dimana mahasiswa yang memiliki minat dan bakat non-akademik dapat menyalurkannya. Departemen ini memiliki beberapa klub di bidang non-akademik, seperti olahraga, games, kewirausahaan, dll.");
        } else if ($(this).val() == '10') {
            $('#deskripsidepartemen2').text("Kajian Strategis atau yang bisa disebut sebagai Kastrat adalah sebuah biro yang mengkaji berbagai isu-isu yang berkembang di dunia IT, ITS, dan juga nasional yang berbasis dari data.");
        } 

        if ($(this).val() == '6') {
            $('#portofolioPilihan2').show();
        } else {
            $('#portofolioPilihan2').hide();
        }
    })
</script>
@endsection