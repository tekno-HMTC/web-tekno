@extends('master')

@section('title', 'Login - PH Only')

@section('css')
<style>
    html {
        height: 100%;
    }

    body {
        background-image: url('https://gsculerlor.s-ul.eu/fPdhqUjy');
        min-height: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .display-middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
    }

    .display-below-middle {
        position: absolute;
        top: 75%;
        left: 50%;
        transform: translate(-75%, -50%);
        -ms-transform: translate(-75%, -50%)
    }

    .padding-large {
        padding: 12px 24px !important;
    }

    .padding-not-large {
        padding: 6px 12px !important;
    }

    .black-background {
        color: #fff !important;
        background-color: #000a12 !important;
    }

    .white-background {
        color: #000 !important;
        background-color: #fff !important;
    }

    .wide {
        letter-spacing: 4px
    }
</style>
<link rel="stylesheet" href="{{ asset('css/oprek.css') }}">
@endsection

@section('body')
<div class="container-fluid" id="home">
    <div class="display-middle" style="min-width: 30%;">
        <div style="display: inline-block;">
            <span class="padding-large black-background wide float-left" style="font-size: 24px; margin-right: 16px;">LOGIN</span>
        </div>
        <div style="display: block;">
            <div class="float-left" style="height: 16px; width: 16px; background-color: #ffffff;"></div>
            <div class="white-background padding-large">
                <form action="/LoginPH" method="post">
                    @csrf
                    <div class="form-group ">
                        <label>Departemen</label>
                        <input name="departemen" type="text" class="form-control" required>
                        <small id="emailHelp" class="form-text text-muted">Departemen anda</small>
                    </div>
                    <div class="form-group ">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" required>
                        <small id="emailHelp" class="form-text text-muted">Password departemen anda</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('master')

@section('title', 'Hasil Pendaftaran')

@section('css')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">

<style>
    .padding-large {
        padding: 6px 12px !important;
    }

    .black-background {
        color: #fff !important;
        background-color: #000a12 !important;
    }

    .wide {
        letter-spacing: 2px
    }
</style>
@endsection