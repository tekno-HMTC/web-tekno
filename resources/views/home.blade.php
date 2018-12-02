@extends('layouts.app')

@section('content')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                {{-- @if (count($rows) > 0)
                  @foreach ($rows as $row)
                    <p>{{$row->nama}}</p>
                  @endforeach
                @endif --}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="row " style="margin-bottom:10px">
                        <div class="col-md-4 text-center text-white bg-success">
                          <p>Pertama</p>
                        </div>
                        <div class="col-md-4 text-center text-white bg-primary">
                          <p>Kedua</p>
                        </div>
                        <div class="col-md-4 text-center text-white bg-secondary">
                          <p>Ketiga</p>
                        </div>
                      </div>
                    	<table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NRP</th>
                                    <th>Pilihan</th>
                                    <th>Alasan</th>
                                </tr>
                            </thead>
                            <tbody>
                              @if (count($rows) > 0)
                                @foreach ($rows['rows1'] as $row)
                                  <tr class="text-white bg-success">
                                      <td>{{$row->nama}}</td>
                                      <td>{{$row->nrp}}</td>
                                      <td>1</td>
                                      <td>{{$row->alasanPilihan1}}</td>
                                  </tr>
                                @endforeach
                                @foreach ($rows['rows2'] as $row)
                                  <tr class="text-white bg-primary">
                                      <td>{{$row->nama}}</td>
                                      <td>{{$row->nrp}}</td>
                                      <td>2</td>
                                      <td>{{$row->alasanPilihan2}}</td>
                                  </tr>
                                @endforeach
                                @foreach ($rows['rows3'] as $row)
                                  <tr class="text-white bg-secondary">
                                      <td>{{$row->nama}}</td>
                                      <td>{{$row->nrp}}</td>
                                      <td>3</td>
                                      <td>{{$row->alasanPilihan2}}</td>
                                  </tr>
                                @endforeach
                              @endif
                            </tbody>
                        </table>
                        <!-- Bootstrap core JavaScript-->
                        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
                        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js" defer></script>

                        <script>
                    		$(document).ready(function() {
                    			$('#example').DataTable();
                    		} );
                    	</script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
