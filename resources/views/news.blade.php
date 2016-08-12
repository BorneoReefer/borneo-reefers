@extends('layouts.app')

@section('content')
<div class="container">
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            @if (Auth::check())
                @if (isset($article))
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Modify article
                    </div>
                    <input type="text" class="form-control" placeholder="Title" value="{{ $article['title'] }}"/>
                    <textarea class="form-control">{{ $article['data'] }}</textarea>
                    <div class="btn-group btn-group-justified">
                        <a id="submit" class="form-submit btn btn-primary" data-redirect="{{ route('app::news') }}" data-method="PUT" data-url="{{ route('api::news.update', $article['id']) }}">Submit</a>
                        <a id="delete" class="form-submit btn btn-danger" data-redirect="{{ route('app::news') }}" data-method="DELETE" data-url="{{ route('api::news.destroy', $article['id']) }}">Delete</a>
                    </div>
                </div>
                @else
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Create new article
                    </div>
                    <input type="text" class="form-control" placeholder="Title"/>
                    <textarea class="form-control"></textarea>
                    <button id="submit" class="btn btn-primary btn-block" data-method="POST" data-url="{{ route('api::news.store') }}">Submit</button>
                </div>
                @endif
            @endif
            @if (! count($news))
                <div class="well">
                    <span class="fa fa-smile-o fa-lg"></span>
                    <span class="pull-right">There is nothing to show here</span>
                </div>
            @endif
            @foreach($news as $news_instance)
                <div class="read panel panel-primary" data-url="{{ route('api::news.show', $news_instance['id'] ) }}">
                    <div class="panel-heading">
                        {{ $news_instance['title'] }}
                        @if (Auth::check())
                            <a href="{{ route('app::news', $news_instance['id']) }}"><span class="fa fa-pencil text-white pull-right"></span></a>
                        @endif
                    </div>
                    <div class="panel-body">
                        {!! substr(strip_tags($news_instance['data']), 0, 120) . "..." !!}
                        <a href="#"> read article</a>
                    </div>
                </div>
            @endforeach
            {!! $news->links() !!}
        </div>
    </div>
</div>
@stop

@section('script_extra')
    @if (Auth::check())
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script src="{{ asset('js/login/news.js') }}" ></script>
    @endif
    <script src="{{ asset('js/news.js') }}" ></script>
@stop
