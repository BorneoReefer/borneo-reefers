@extends('layouts.app')

@section('content')
<div class="container-fluid index" style="background: url({{ asset('images/index.jpg') }});">
    <div class="index-logo">
        <img src="{{ asset('images/logo.png') }}" />
    </div>
</div>
@stop

@section('script_extra')
    <script src="{{ asset('js/index.js') }}" ></script>
@stop
