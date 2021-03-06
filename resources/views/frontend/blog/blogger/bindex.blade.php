@extends('layouts.blogger-master')
@section('title')
    Blogger Dashboard
@endsection
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class="current"><a href=""><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li><a href="{{route('blogger.posts')}}"><i class="glyphicon glyphicon-paste"></i>Posts</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-map-marker"></i>Places</a></li>
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
                <div class="row">
                    <div class="col-md-4 text-center content-box">
                        <a href="{{route('blogger.posts')}}"><i class="glyphicon glyphicon-pencil" style="font-size: 120px; color:red"></i></a>
                        <h4>POSTS</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection

