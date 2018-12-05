@extends('master')

@section('body')

<div class="container">
    <div class="row" style="margin-top: 24px; margin-bottom: 24px;">
        <div class="col-sm">
            <div class="card text-white" style="background-color: #002171;">
                <div class="card-body">
                    <h3 class="card-title">
                        @php
                        echo count($rows['rows1']) + count($rows['rows2']) + count($rows['rows3'])
                        @endphp
                    </h3>
                    <p class="card-text">
                        Total pendaftar {{ Session::get('departemen') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-white" style="background-color: #1565c0;">
                <div class="card-body">
                    <h3 class="card-title">
                        @php
                        echo count($rows['rows1'])
                        @endphp
                    </h3>
                    <p class="card-text">
                        Total pendaftar {{ Session::get('departemen') }} pilihan 1
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-white" style="background-color: #1e88e5;">
                <div class="card-body">
                    <h3 class="card-title">
                        @php
                        echo count($rows['rows2'])
                        @endphp
                    </h3>
                    <p class="card-text">
                        Total pendaftar {{ Session::get('departemen') }} pilihan 2
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-white" style="background-color: #42a5f5;">
                <div class="card-body">
                    <h3 class="card-title">
                        @php
                        echo count($rows['rows3'])
                        @endphp
                    </h3>
                    <p class="card-text">
                        Total pendaftar {{ Session::get('departemen') }} pilihan 3
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
                        <th style="width: 25%">Nama</th>
                        <th style="width: 10%">NRP</th>
                        <th style="width: 45%">Alasan</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($rows['rows1']) > 0)
                    @foreach ($rows['rows1'] as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->nrp}}</td>
                        <td>{{$row->alasan_pilihan_satu}}</td>
                        <td>
                            <a href="{{ Storage::url($row->file_foto) }}" class="btn btn-secondary">Foto</a>
                            <a href="{{ Storage::url($row->file_cv) }}" class="btn btn-secondary">CV</a>
                            <a href="{{ Storage::url($row->file_mbti) }}" class="btn btn-secondary">MBTI</a>
                            @if (Session::get('id') == 6)
                            <a href="{{ Storage::url($row->portofolio) }}" class="btn btn-secondary">Portofolio</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @endif
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
                        <th style="width: 25%">Nama</th>
                        <th style="width: 10%">NRP</th>
                        <th style="width: 45%">Alasan</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($rows['rows2']) > 0)
                    @foreach ($rows['rows2'] as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->nrp}}</td>
                        <td>{{$row->alasan_pilihan_dua}}</td>
                        <td>
                            <a href="{{ Storage::url($row->file_foto) }}" class="btn btn-secondary">Foto</a>
                            <a href="{{ Storage::url($row->file_cv) }}" class="btn btn-secondary">CV</a>
                            <a href="{{ Storage::url($row->file_mbti) }}" class="btn btn-secondary">MBTI</a>
                            @if (Session::get('id') == 6)
                            <a href="{{ Storage::url($row->portofolio) }}" class="btn btn-secondary">Portofolio</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div style="margin-bottom: 16px;">
            <div style="display: inline-block;">
                <span style="font-size: 20px; margin-right: 16px;">Pilihan
                    3</span>
            </div>
            <table id="pilihan-3" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 25%">Nama</th>
                        <th style="width: 10%">NRP</th>
                        <th style="width: 45%">Alasan</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($rows['rows3']) > 0)
                    @foreach ($rows['rows3'] as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->nrp}}</td>
                        <td>{{$row->alasan_pilihan_tiga}}</td>
                        <td>
                            <a href="{{ Storage::url($row->file_foto) }}" class="btn btn-secondary">Foto</a>
                            <a href="{{ Storage::url($row->file_cv) }}" class="btn btn-secondary">CV</a>
                            <a href="{{ Storage::url($row->file_mbti) }}" class="btn btn-secondary">MBTI</a>
                            @if (Session::get('id') == 6)
                            <a href="{{ Storage::url($row->portofolio) }}" class="btn btn-secondary">Portofolio</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @endif
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

    $(document).ready(function () {
        $('#pilihan-3').DataTable();
    });

</script>

@endsection