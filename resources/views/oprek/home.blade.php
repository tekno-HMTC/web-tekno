@extends('master')

@section('css')
<style>
    .btn {
        margin-bottom: 8px;
    }

    .stats {
        transition: all 0.05s;
        -webkit-transition: all 0.05s;
        -moz-transition: all 0.05s;
    }

    .stats:hover {
        -webkit-box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
        box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.75);
    }
</style>
<link rel="stylesheet" href="{{ asset('css/oprek.css') }}">
@endsection

@section('body')
<div class="container">
    <div class="row" style="margin-top: 24px; margin-bottom: 24px;">
    <div class="col-sm-3">
            <div class="stats card text-white" style="background-color: #002171;">
                <div class="card-body">
                    <h3 class="card-title">
                        @php
                        echo count($rows['rows1'])
                        @endphp
                    </h3>
                    <p class="card-text">
                        Pilihan 1 - {{ Session::get('departemen')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="stats card text-white" style="background-color: #002171;">
                <div class="card-body">
                    <h3 class="card-title">
                        @php
                        echo count($rows['rows2'])
                        @endphp
                    </h3>
                    <p class="card-text">
                        Pilihan 2 - {{ Session::get('departemen')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div style="margin-bottom: 16px;">
            <div style="display: inline-block;">
                <span style="font-size: 20px; margin-right: 16px;">Pilihan
                    1</span>
            </div>
            <table id="pilihan-1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NRP</th>
                        <th>Alasan Pilihan 1</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows['rows1'] as $row)
                    <tr>
                        <td>{{ $row->nama }} <span class="badge badge-secondary">{{ $rows['dept'][$row->pilihan_satu] }}</span> <span class="badge badge-secondary">{{ $rows['dept'][$row->pilihan_dua] }}</span></td>
                        <td>{{ $row->nrp }}</td>
                        <td>{{ $row->alasan_pilihan_satu }}</td>
                        <td>
                            <a href="{{ $row->file_foto }}" class="btn btn-secondary">Foto</a>
                            <a href="{{ $row->file_cv }}" class="btn btn-secondary">CV</a>
                            @if (Session::get('id') == 6)
                                <a href="{{ $row->portofolio }}" class="btn btn-secondary">Portofolio</a>
                            @endif
                            <button type="button" class="collapsible btn btn-secondary">Expand Jawaban</button>
                            <div class="content" style="display: none; text-align: left;">
                                <p>1. {{ $row->question_dept_ngapain }}</p>
                                <p>2. {{ $row->question_dept_proker }}</p>
                                <p>3. {{ $row->question_dept_fungsionaris }}</p>
                                <p>4. {{ $row->question_magang_harapan }}</p>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="margin-bottom: 16px;">
            <div style="display: inline-block;">
                <span style="font-size: 20px; margin-right: 16px;">Pilihan
                    2</span>
            </div>
            <table id="pilihan-2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NRP</th>
                        <th>Alasan Pilihan 2</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows['rows2'] as $row)
                    <tr>
                        <td>{{ $row->nama }} <span class="badge badge-secondary">{{ $rows['dept'][$row->pilihan_satu] }}</span> <span class="badge badge-secondary">{{ $rows['dept'][$row->pilihan_dua] }}</span></td>
                        <td>{{ $row->nrp }}</td>
                        <td>{{ $row->alasan_pilihan_dua }}</td>
                        <td>
                            <a href="{{ $row->file_foto }}" class="btn btn-secondary">Foto</a>
                            <a href="{{ $row->file_cv }}" class="btn btn-secondary">CV</a>
                            @if (Session::get('id') == 6)
                                <a href="{{ $row->portofolio }}" class="btn btn-secondary">Portofolio</a>
                            @endif
                            <button type="button" class="collapsible btn btn-secondary">Expand Jawaban</button>
                            <div class="content" style="display: none; text-align: left;">
                                <p>1. {{ $row->question_dept_ngapain }}</p>
                                <p>2. {{ $row->question_dept_proker }}</p>
                                <p>3. {{ $row->question_dept_fungsionaris }}</p>
                                <p>4. {{ $row->question_magang_harapan }}</p>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js" defer></script>

<script>
    $(document).ready(function () {
        $('#pilihan-1').DataTable();
    });

    $(document).ready(function () {
        $('#pilihan-2').DataTable();
    });
</script>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


@endsection
