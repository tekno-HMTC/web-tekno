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
                        Total pendaftar staff magang HMTC
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div style="margin-bottom: 16px;">
            <div style="display: inline-block;">
                <span style="font-size: 20px; margin-right: 16px;">Pendaftar</span>
            </div>
            <table id="pilihan-semua" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NRP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($rows['rows1']) > 0)
                    @foreach ($rows['rows1'] as $row)
                    <tr>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->nrp }}</td>
                        <td>
                            <a href="{{ $row->file_foto }}" class="btn btn-secondary">Foto</a>
                            <a href="{{ $row->file_cv }}" class="btn btn-secondary">CV</a>
                            @if ($row->portofolio != null)
                                <a href="{{ $row->portofolio }}" class="btn btn-secondary">Portofolio</a>
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
        $('#pilihan-semua').DataTable();
    });
</script>

@endsection