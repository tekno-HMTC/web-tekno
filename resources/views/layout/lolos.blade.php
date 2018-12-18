<div class="card" style="padding: 20px; background-color: #e3f2fd;">
    <div class="card-body container-fluid" style="padding: 0px;">
        <div class="row">
            <div class="col-md-5" style="max-width: 400px;">
                <img src="https://gsculerlor.s-ul.eu/elGGYdok" alt="barcode">
            </div>
            <div class="col-md-7 container" style="height: 100%;">
                <div style="margin: auto 0px;">
                    <div class="row">
                        <div class="col-3">
                            <h6>Nama</h6>
                        </div>
                        <div class="col-9">: {{ Session::get('nama') }}</div>
                    </div>
                    <div class="row">
                        <div class="col-3">NRP</div>
                        <div class="col-9">: 0511174000{{ Session::get('nrp') }}</div>
                    </div>
                    <div class="content" style="margin-top: 32px;">
                        Selamat atas keberhasilan anda!<br><br>
                        Anda dinyatakan lulus pada seleksi staff HMTC 2018/2019 pada departemen: <br><br>

                        <h4>Departemen {{ Session::get('departemen') }}</h4><br>

                        Untuk tahap selanjutnya silahkan menghubungi kepala departemen masing-masing. Kami ucapkan lagi
                        selamat dan ditunggu kontribusi anda untuk HMTC
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
