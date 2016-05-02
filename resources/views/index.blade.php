@extends('layouts.app')

@section('content')
<div class="container-fluid index">
    <div class="index-logo">
        <img class="col-xs-12" src="{{ asset('images/logo.png') }}" />
    </div>
</div>
@stop

@section('script_extra')
    <script src="{{ asset('js/index.js') }}" ></script>
@stop
