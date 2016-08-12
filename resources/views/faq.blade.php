@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            @if (Auth::check())
                @if (isset($question))
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Modify FAQ
                    </div>
                    <input type="text" class="form-control" placeholder="Title" value="{{ $article['title'] }}"/>
                    <textarea class="form-control">{{ $article['data'] }}</textarea>
                    <div class="btn-group btn-group-justified">
                        <a id="submit" class="form-submit btn btn-primary" data-redirect="{{ route('app::faq') }}" data-method="PUT" data-url="{{ route('api::faq.update', $article['id']) }}">Submit</a>
                        <a id="delete" class="form-submit btn btn-danger" data-redirect="{{ route('app::faq') }}" data-method="DELETE" data-url="{{ route('api::faq.destroy', $article['id']) }}">Delete</a>
                    </div>
                </div>
                @else
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Create new FAQ
                    </div>
                    <input type="text" class="form-control" placeholder="Title"/>
                    <textarea class="form-control"></textarea>
                    <button id="submit" class="form-submit btn btn-primary btn-block" data-method="POST" data-url="{{ route('api::faq.store') }}">Submit</button>
                </div>
                @endif
            @endif
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
                        @if (Auth::check())
                            <a href="{{ route('app::faq', $faq_instance['id']) }}"><span class="fa fa-pencil text-white pull-right"></span></a>
                        @endif
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

@section('script_extra')
    @if (Auth::check())
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script src="{{ asset('js/login/faq.js') }}" ></script>
    @endif
@stop
