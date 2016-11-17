@extends('layouts.master')
@section('title')
    {{$post->title}}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center">
                <img class="img-responsive img-border img-full" src="{{URL::to('img/uploads/admin/posts/'.$post->picture)}}" alt="">
                <h2>{{$post->title}}
                    <br>
                    <small>{{$post->created_at->diffForHumans()}}</small>
                </h2>
                <p>{{nl2br($post->body)}}</p>
                   <hr>
            </div>
            <div class="col-lg-4">
                <p>Do you wish to be blogger here Register below for membership</p>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')

@endsection
