<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="{{asset('js/welcome.js')}}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
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
            {{-- <style >
              *{border: 1px #000 solid}
            </style> --}}
            <div class="content" style="padding-top: 80px">
              <h1 class="display-1">Oprec Staff HMTC</h1>
              <div class="container" style="padding-top: 40px">
                @include('message')
                <div class="row justify-content-md-center">
                  <div class="col-md-4">
                    <div class="card border-dark">
                      <div class="card-header border-dark">
                        Penjelasan Pilihan Departemen
                      </div>
                      <div class="card-body">
                        <div id="CardDptDsc1" style="display:none">
                          <div class="card text-white bg-primary mb-3" >
                            <div class="card-header">Tekno</div>
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div id="CardDptDsc2" style="display:none">
                          <div class="card text-white bg-secondary mb-3" >
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div id="CardDptDsc3" style="display:none">
                          <div class="card text-white bg-success mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card border-dark">
                      <div class="card-header border-dark">
                          Form Pendaftaran
                      </div>
                      <div class="card-body">
                        <form class="text-left" id="Form" action="/FormOprec" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
                          @csrf
                          <div class="form-group ">
                            <label >Nama</label>
                            <input name="nama" type="text" class="form-control" required>
                            <small id="emailHelp" class="form-text text-muted">Gunakan nama lengkap</small>
                          </div>
                          <div class="form-group">
                            <label class="text-left"> NRP</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">0511174000</div>
                              </div>
                              <input name="nrp" type="text" class="form-control" id="inlineFormInputGroup" placeholder="XXXX" maxlength="4" pattern="\d{4}" required>

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
                            <div class="form-group" >
                              <label>Departemen Pilihan Pertama</label>
                              <select name="pilihan1" class="select-departemen form-control mr-sm-2" id="selectPilihan1" onchange="tampilkanPenjelasan1()" required>
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
                            <div class="form-group" >
                              <label>Alasan Memilih Departemen Pilihan Pertama</label>
                              <textarea name="alasanPilihan1" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>
                          </div>
                          <div id="pilihan2" style="display:none">
                            <div class="form-group">
                              <label>Departemen Pilihan Kedua</label>
                              <select name="pilihan2" class="select-departemen form-control mr-sm-2" id="selectPilihan2" onchange="tampilkanPenjelasan2()">
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
                              <textarea name="alasanPilihan2" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          </div>
                          <div id="pilihan3" style="display:none">
                            <div class="form-group">
                              <label>Departemen Pilihan Ketiga</label>
                              <select name="pilihan3" class="select-departemen form-control mr-sm-2" id="selectPilihan3" onchange="tampilkanPenjelasan3()" >
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
                              <textarea name="alasanPilihan3" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Submit') }}
                                  </button>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </body>
</html>
