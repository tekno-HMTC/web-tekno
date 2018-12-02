@extends('master')

@section('title', 'Coming Soon')

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

    .padding-large{
        padding: 12px 24px !important;
    }

    .padding-not-large{
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
@endsection

@section('body')
<div class="container-fluid" id="home">
    <div class="display-middle">
        <div style="display: block;">
            <span class="padding-large black-background wide float-left" style="font-size: 24px; margin-right: 16px;">COMING SOON</span>
            <div class="float-right" style="height: 24px; width: 24px; background-color: #000a12;"></div>
        </div>
        <div style="display: block;">
            <div class="float-left" style="height: 16px; width: 16px; background-color: #ffffff;"></div>
            <span class="padding-not-large white-background wide float-right" style="font-size: 12px; margin: 8px;">Created by Edwin & Ganen @Tekno-HMTC</span>
        </div>
    </div>
</div>
@endsection