@extends('layouts.admin-master')
@section('title')
   Bloggers List
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/jquery.dataTables.min.css')}}">
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
                <div class="table-responsive">
                    <table class="table table-hover" id="contact">
                        <thead>
                        <tr class="text-info">
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>password</th>
                            <th class="hidden">Picture</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                      @foreach($bloggers as $blogger)
                            <tr>
                                <td>{{$blogger->fullname}}</td>
                                <td>{{$blogger->email}}</td>
                                <td>{{$blogger->username}}</td>
                                <td>{{$blogger->password}}</td>
                                <td class="hidden">{{$blogger->picture}}</td>
                                <td><a href="{{route('blogger.delete',['blogger_id' => $blogger->id,'blogger_name'=> $blogger->fullname])}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                <a href="" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::to('src/js/jquery.dataTables.min.js')}}"></script>
    <script>
        $('#contact').DataTable({
            "processing": true,
            "lengthMenu": [[4, 8, 12, 16, -1], [4, 8, 12, 16, "All"]],
            "columnDefs": [
                {
                    "targets": [0,1],
                    "sortable": true,
                    "searchable": true
                }
            ]
        });
    </script>


@endsection