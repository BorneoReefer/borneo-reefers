<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
    <title>{{ $title or "Borneo Reefers" }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' type='text/css'>
    @yield('head_extra')
    @if(Auth::check())
        <meta name="_token" content="{{ csrf_token() }}" />
    @endif
</head>
@if(isset($background))
    <body class="index" style="background: url({{ asset($background) }}) no-repeat center center fixed;">
@else
    <body>
@endif
    <div class="wrapper">
    @if(isset($banner))
        <div class="{{ $banner }}"></div>
    @else
        <div class="banner-filler" style="background-image: url('{{ asset('images/banner.jpg') }}');"></div>
    @endif
        <!--Index navigation bar-->
        @include('templates.navbar')
        <div class="content">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('script_extra')
</body>
</html>
