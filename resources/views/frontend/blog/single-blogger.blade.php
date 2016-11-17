@extends('layouts.master')
@section('title')
    Our Blog
@endsection
@section('styles')
    <style>
        .thumbnail{
            padding: 0 0 15px 0;
            border: 5px solid #F7F7F7;
            border-radius: 3px;
            height:250px;
            box-sizing: border-box;
            color: #fff;
        }
        .thumbnail img{
            width:100%;
            height: 100%;
            margin-top: 0px;
        }
        .thumbnail p > a{

            text-decoration: none;
            font-weight: 500;
            margin-bottom:5px;
            padding-left: 10px;
            padding-right: 10px;
            color:#000;
            line-height: 17px;
            min-height: 10px;
        }
        .thumbnail span{
            margin-bottom: 0;
            font-size: .75em;
            padding-left: 10px;
            padding-right: 10px;
        }
        .blog-head{
            color: #fff;
            background: #999;

        }


    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <p class="intro-text text-center" style="font-size:34px; color:#000;font-weight: 700;text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                    <strong>{{$blogger->fullname}} BLOGs</strong>
                </p>
            </div>
            <div class="col-lg-4">
                <p>Do you wish to be blogger here Register below for membership</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                @if(count($posts) == 0)
                    No  places
                @else
                    @foreach($posts as $post)
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <a href="{{route('single',['post_id'=> $post->id, 'post_title' => $post->title])}}"><img src="{{URL::to('img/uploads/admin/posts/'.$post->picture)}}" alt="{{$post->picture}}" style="height: 130px"></a>
                                <div>
                                    <p class="text-center"><a>{{$post->title}}</a></p>
                                    <span  class="pull-left">{{$post->created_at->diffForHumans()}}</span>
                                    <a><span  class="pull-right">{{$post->author}}</span></a>
                                    <div class="clearfix"></div>
                                    <div class="blog-head">
                                        <p><span class='st_sharethis_large' displayText='ShareThis'></span>
                                            <span class='st_facebook_large' displayText='Facebook'></span>
                                            <span class='st_twitter_large' displayText='Tweet'></span>
                                            <span class='st_linkedin_large' displayText='LinkedIn'></span>
                                            <span class='st_pinterest_large' displayText='Pinterest'></span>
                                            <span class='st_email_large' displayText='Email'></span></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-4">
                <div class="box" style="background: #000; color:#fff" >
                    <form method="post" action="{{route('blogger.new')}}" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Fullname</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="FullName">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="image">File input</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <input type="submit" class="btn btn-danger btn-block" value="Submit">
                        <button type="reset" class="btn btn-success btn-block">Reset</button>
                    </form>
                </div>
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