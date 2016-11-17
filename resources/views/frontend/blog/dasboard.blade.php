@extends('layouts.master')
@section('title')
    Our Blog
@endsection
@section('styles')
    <style>
        /*.thumbnail{*/
            /*padding: 0 0 15px 0;*/
            /*border: 5px solid #F7F7F7;*/
            /*border-radius: 3px;*/
            /*height:250px;*/
            /*box-sizing: border-box;*/
            /*color: #fff;*/
        /*}*/
        /*.thumbnail img{*/
            /*width:100%;*/
            /*height: 100%;*/
            /*margin-top: 0px;*/
        /*}*/
        /*.thumbnail p > a{*/

            /*text-decoration: none;*/
            /*font-weight: 500;*/
            /*margin-bottom:5px;*/
            /*padding-left: 10px;*/
            /*padding-right: 10px;*/
            /*color:#000;*/
            /*line-height: 17px;*/
            /*min-height: 10px;*/
        /*}*/
        /*.thumbnail span{*/
            /*margin-bottom: 0;*/
            /*font-size: .75em;*/
            /*padding-left: 10px;*/
            /*padding-right: 10px;*/
        /*}*/
        .thumbnail {
            position: relative;
            padding: 0;
            margin-bottom: 20px;
            height:250px;
        }
        .thumbnail a .info {
            position: absolute;
            top: 0px;
            right: 0px;
            font-size: 0.6em;
            padding-left: 15px;
            border-bottom-left-radius: 4px;
            cursor:  pointer;
        }
        .thumbnail a .info > span {
            margin-right: 10px;
        }

        .thumbnail img {
            width: 100%;
        }
        /*.thumbnail a.btn {*/
            /*border-top-left-radius: 0px;*/
            /*border-top-right-radius: 0px;*/
        /*}*/
        .thumbnail p > a{
            color: #000;
        }
        .thumbnail p{
            margin-bottom: 0;
        }
        .label-info{
            background-color: red;
        }
        .thumbnail .social{
            background-color: #fff200;
            position: absolute;
            bottom: 0;
            height:30px;
            box-shadow: 1px 1px 2px #000;
            padding: 5px;
        }
    </style>
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="top-heading text-center">
                    <strong> READ OUR BLOGs</strong>
                </h2>
            </div>
            <div class="col-lg-4">
                <p>Do you wish to be blogger here Register below for membership <a href="{{route('register')}}">Register</a> </p>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
              @if(count($posts) == 0)
                  No  places
              @else
                  @foreach($posts as $post)
              {{--<div class="col-sm-4">--}}
                  {{--<div class="thumbnail">--}}
                      {{--<a href="{{route('single',['post_id'=> $post->id, 'post_title' => $post->title])}}"><img src="{{URL::to('img/uploads/admin/posts/'.$post->picture)}}" alt="{{$post->picture}}" style="height: 130px"></a>--}}
                     {{--<div>--}}
                      {{--<p class="text-center"><a>{{$post->title}}</a></p>--}}
                      {{--<span  class="pull-left">{{$post->created_at->diffForHumans()}}</span>--}}
                         {{--<a href="{{route('single.blogger',['blogger_id'=> $post->blogger_id,'post_author'=> $post->author])}}">--}}
                             {{--<span  class="pull-right">{{$post->author}}</span></a>--}}
                         {{--<div class="clearfix"></div>--}}
                         {{--</div>--}}
                  {{--</div>--}}
              {{--</div>--}}
                  <div class="col-sm-4">
                      <div class="thumbnail">
                          <a href="{{route('single',['post_id'=> $post->id, 'post_title' => $post->title])}}"><img src="{{URL::to('img/uploads/admin/posts/'.$post->picture)}}" alt="{{$post->picture}}" style="height: 130px">
                          <span class="label label-info info">
                        <span data-toggle="tooltip" title="viewed">257 <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="favourite">3 <b class="glyphicon glyphicon-star"></b></span>
                        </span>
                          </a>
                          <p class="text-center"><a href="{{route('single',['post_id'=> $post->id, 'post_title' => $post->title])}}">{{$post->title}}</a></p>
                          <div class="text-center">{{$post->created_at->diffForHumans()}}</div>
                          <div ><a href="{{route('single.blogger',['blogger_id'=> $post->blogger_id,'post_author'=> $post->author])}}" style="padding:2px">
                          {{$post->author}}</a></div>
                          <div class="social col-sm-12">jdjudjdjd</div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
                  @endforeach
              @endif
          </div>
            <div class="col-lg-4">
                <div class="box">
                    <p>Advertisement</p>
                    <img src="{{URL::to('src/img/paris.jpg')}}" alt="" class="img-responsive" style="margin-bottom: 10px">
                    <img src="{{URL::to('src/img/newyork.jpg')}}" alt="" class="img-responsive" style="margin-bottom:10px">
                    <img src="{{URL::to('src/img/newyork.jpg')}}" alt="" class="img-responsive" style="margin-bottom: 10px">

                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready( function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
