@extends('layouts.admin-master')
@section('title')
    Admin Dashboard
@endsection
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li><a href="{{route('post.index')}}"><i class="glyphicon glyphicon-paste"></i>Posts</a></li>
                        <li><a href="{{route('admin.place')}}"><i class="glyphicon glyphicon-map-marker"></i>Places</a></li>
                        {{--<li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>--}}
                        {{--<li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>--}}
                        {{--<li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>--}}
                        {{--<li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>--}}
                        {{--<li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>--}}
                        {{--<li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>--}}
                        <li class="submenu">
                            <a href="#">
                                <i class="glyphicon glyphicon-list"></i> Pages
                                <span class="caret pull-right"></span>
                            </a>
                            <!-- Sub menu -->
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="pull-right" style="margin-bottom: 5px;margin-top: 0;" >
                    <a href="{{route('create')}}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="thumbnail content-box">
                            <img src="{{URL::to('img/uploads/admin/posts/'.$post->picture)}}" alt="">
                            <h4><strong>{{$post->title}}</strong></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus.</p>
                            <div>
                                <a href="{{route('modify',['post_id' => $post->id,'post_title' => $post->title])}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a>
                                <a  href="{{route('delete.post',['post_id' => $post->id,'post_title' => $post->title])}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection