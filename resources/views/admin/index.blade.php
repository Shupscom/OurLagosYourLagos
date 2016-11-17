@extends('layouts.admin-master')
@section('title')
    Admin Dashboard
@endsection
@section('styles')
    <style>
  /*.col-md-4 .glyphicon{*/
    /*background-color: #0b405b;*/
    /*border: 5px solid #2293cd;*/
    /*border-radius: 100px;*/
    /*color: #ffffff;*/
    /*font-size: 90px;*/
    /*padding: 30px;*/
    /*top: 15px;*/
    /*}*/
    </style>
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
            <div class="row">
                  <div class="col-md-4 text-center content-box">
                      <a href="{{route('post.index')}}"><i class="glyphicon glyphicon-pencil" style="font-size: 120px; color:red"></i></a>
                      <h4>POSTS</h4>
                  </div>
                    <div class="col-md-4 text-center content-box">
                        <a href="{{route('admin.place')}}"><i class="glyphicon glyphicon-map-marker" style="font-size: 120px;color:red"></i></a>
                        <h4>PLACES</h4>
                    </div>
                <div class="col-md-4 text-center content-box">
                        <a href="#"> <i class="glyphicon glyphicon-calendar" style="font-size: 120px;color:red"></i></a>
                    <h4>EVENTS</h4>
                    </div>
                <div class="col-md-4 text-center content-box">
                    <a href="{{route('messages')}}"> <i class="glyphicon glyphicon-comment" style="font-size: 120px;color:red"></i></a>
                    <h4>CONTACT MESSAGES</h4>
                </div>
                <div class="col-md-4 text-center content-box">
                    <a href="{{route('blogger.admin')}}"> <i class="glyphicon glyphicon-user" style="font-size: 120px;color:red"></i></a>
                    <h4>BLOGGERS</h4>
                </div>
                <div class="col-md-4 text-center content-box">
                    <a href="{{route('admin.news')}}"> <i class="glyphicon glyphicon-book" style="font-size: 120px;color:red"></i></a>
                    <h4>NEWS</h4>
                </div>
                <div class="col-md-4 text-center content-box">
                    <a href="{{route('admin.witness')}}"> <i class="glyphicon glyphicon-eye-open" style="font-size: 120px;color:red"></i></a>
                    <h4>EYE WITNESS</h4>
                </div>

                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

