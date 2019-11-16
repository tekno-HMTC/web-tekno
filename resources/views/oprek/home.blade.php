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
                        <th>Departemen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows['rows1'] as $row)
                    <tr>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->nrp }}</td>
                        <td>
                            <a href="{{ Storage::url($row->file_foto) }}" class="btn btn-secondary">Foto</a>
                            <a href="{{ Storage::url($row->file_cv) }}" class="btn btn-secondary">CV</a>
                            @if (Session::get('id') == 6)
                                <a href="{{ Storage::url($row->portofolio) }}" class="btn btn-secondary">Portofolio</a>
                            @endif
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
                        <th>Departemen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows['rows2'] as $row)
                    <tr>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->nrp }}</td>
                        <td>{{ $row->departemen_nama }}</td>
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

@endsection
