@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            @if (! count($faq))
                <div class="well">
                    <span class="fa fa-smile-o fa-lg"></span>
                    <span class="pull-right">There is nothing to show here</span>
                </div>
            @endif
            @foreach($faq as $faq_instance)
                <div class="read panel panel-primary">
                    <div class="panel-heading">
                        {{ $faq_instance['title'] }}
                    </div>
                    <div class="panel-body">
                        {!! $faq_instance['data'] !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop
