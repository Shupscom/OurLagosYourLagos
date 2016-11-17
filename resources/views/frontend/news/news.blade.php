@extends('layouts.master')
@section('title')
      LAGOS NEWS
@endsection
@section('style')
    <style>
    .thumbnail {
    padding:0;
    }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    @if(count($news) == 0)
                        <h2 class="text-center">No Available news</h2>
                    @else
                        @foreach($news as $new)
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="{{URL::to('img/uploads/admin/news/'.$new->picture)}}">
                                    <div class="caption">
                                        <h4 id="topic">{{$new->title}}</h4>
                                        <p class="text-justify">{{$new->body}}</p>
                                        <a href="" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-comment">Comments</i></a> <span href="#" class=""></span>
                                    <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        </div>
@endsection
@section('scripts')

@endsection