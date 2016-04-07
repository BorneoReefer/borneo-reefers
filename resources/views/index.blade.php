@extends('layouts.app')

@section('content')
<div class="index-right-header">
    <div class="index-content">
        <h1>Borneo Reefer</h1>
    </div>
</div>
<div class="index-right-content">
    <div class="index-content index-content-text">
        <p>
            This is our company information.
        </p>
    </div>
</div>
<div class="index-parallax-container">
    <img class="index-parallax-image" src="{{ asset('images/banner.jpg') }}"/>
</div>
<div class="container container-index">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Heading
        </div>
        <div class="panel-body">
            Content
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Heading
        </div>
        <div class="panel-body">
            Content
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Heading
        </div>
        <div class="panel-body">
            Content
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Heading
        </div>
        <div class="panel-body">
            Content
        </div>
    </div>
</div>
@stop

@section('script_extra')
    <script src="{{ asset('js/index.js') }}" ></script>
@stop
