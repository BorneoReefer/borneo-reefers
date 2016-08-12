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
            @foreach($news as $news_instance)
                <div class="read panel panel-primary" data-url="{{ route('api::news.show', $news_instance['id'] ) }}">
                    <div class="panel-heading">
                        {{ $news_instance['title'] }}
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
    <script src="{{ asset('js/news.js') }}" ></script>
@stop
