@extends('master')

@section('title', 'Oprek')

@section('css')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
.card {
    transition: all 0.05s;
    -webkit-transition: all 0.05s;
    -moz-transition: all 0.05s;
}

.card:hover {
    -webkit-box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
}
</style>
@endsection

@section('body')
<div class="container">
    <h1 class="display-1" style="text-align:center;margin:40px;font-family: 'Montserrat', sans-serif;">It brought me to the end before the beginning</h1>
    <div class="row">
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Teknologi</h4>
                    <p class="card-text">Departemen Teknologi bertujuan untuk membangun komunitas yang inovatif dan memiliki semangat berkontribusi dalah pengembangan teknologi dan informasi khususnya di TC</p>
                    <a href="https://www.instagram.com/p/BZtOIIglaHf/" class="card-link">Lihat Departemen Tekno Sebelumnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Dalam Negeri</h4>
                    <p class="card-text">Departemen Dalam Negeri atau DAGRI adalah departemen yang menaungi anggota hmtc untuk menumbuhkan rasa peduli terhadap sesama sehingga tercipta suasana kekeluargaan dalam hmtc.</p>
                    <a href="https://www.instagram.com/p/BZtLx4QF7a0/" class="card-link">Lihat Departemen Dagri Sebelumnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Hubungan Luar</h4>
                    <p class="card-text">Departemen Hubungan Luar adalah departemen yang menjadi jembatan di antara stakeholder-stakeholder HMTC seperti Ormawa ITS & Luar ITS, Perusahaan, Alumni,dan  forum-forum Informatika di Indonesia, serta menyediakan informasi dan wadah mengenai jurusan Informatika ITS bagi teman-teman SMA/K/ Umum di seluruh Indonesia.</p>
                    <a href="https://www.instagram.com/p/BZtM7QrloMx/" class="card-link">Lihat Departemen Hublu Sebelumnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Kaderisasi dan Pemetaan</h4>
                    <p class="card-text">KDPM atau Kaderisasi dan Pemetaan adalah departemen mulia yang bertanggung jawab atas pengembangan sumber daya manusia HMTC. KDPM mengurus langsung mahasiswa tahun pertama dalam proses adaptasi, penanaman nilai-nilai yang bermasyarakat, persiapan memasuki himpunan dan menjalankan fungsi pemetaan minat dan bakat.</p>
                    <a href="https://www.instagram.com/p/BZtMVYfl-_0/" class="card-link">Lihat Departemen KDPM Sebelumnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Pengembangan Profesi</h4>
                    <p class="card-text">Departemen Pengembangan Profesi adalah salah satu departemen HMTC yang memfasilitasi warga HMTC di bidang softskill. Departemen ini ditujukan untuk mempersiapkan mahasiswa TC dalam memasuki dunia kerja.  Departemen ini fokus pada pemgembangan mahasiswa tingkat 2, 3, dan 4.</p>
                    <a href="https://www.instagram.com/p/BZtSGj3FT7p/" class="card-link">Lihat Departemen Pengpro Sebelumnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Media Informasi</h4>
                    <p class="card-text">Departemen Media dan Informasi adalah ujung tombak HMTC dalam penyebaran informasi, serta sebagai wadah bagi mahasiswa informatika belajar dan menemukan hal baru dalam bidang media dan informasi</p>
                    <a href="https://www.instagram.com/p/BZtUY2NlNJA/" class="card-link">Lihat Departemen Medfo Sebelumnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Kesejahteraan Mahasiswa</h4>
                    <a href="https://www.instagram.com/p/BZtUFCtF8up/" class="card-link">Lihat Departemen Kesma Sebelumnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departemen Sosial Masyarakat</h4>
                    <p class="card-text">Departemen sosial masyarakat HMTC adalah departemen yang mewadahi mahasiswa Informatika untuk mengabdi kepada masyarakat dengan kepedulian sosial dan aksi nyata.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 8px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Biro Kajian Strategi</h4>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    
</script>
@endsection