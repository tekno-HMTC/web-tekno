<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.metadata')

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/oprek.css') }}">
</head>
<body>
    @yield('body')

    <script src="{{asset('js/welcome.js')}}" defer></script>
    @yield('script')
</body>
</html>