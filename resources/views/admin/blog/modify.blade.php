@extends('layouts.admin-master')
@section('title')
    Edit Posts
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
                <div class="row ">
                    <div class="col-md-8 content-box">
                        <h3>Edit {{$post->title}}</h3>
                        <form action="{{route('modify.post')}}" method="post" enctype="multipart/form-data">
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{Request::old('title')
                            ? Request::old('title') : isset($post) ? $post->title : ''}}"/>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file">Picture</label>
                                <input class="form-control"  type="file" name="file" id="file" value="{{URL::to('img/uploads/admin/posts/'.$post->picture)}}" />
                                @if ($errors->has('file'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('file') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body">Body</label>
                                <textarea class="form-control" name="body" id="body" rows="10" {{$errors->has('body') ? 'class=has-error' : ''}}>{{Request::old('body')
                ?               Request::old('body') : isset($post) ? $post->body : ''}}}</textarea>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                                <label for="author">Author</label>
                                <input class="form-control" type="text" name="author" id="author" placeholder="Author" value="{{Request::old('author')
                                ? Request::old('author') : isset($post) ? $post->author : ''}}"/>
                                @if ($errors->has('author'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('author') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="author_picture">Author Picture</label>
                                <input class="form-control"  type="file" name="author_picture" id="author_picture" />
                            </div>
                            <div class="form-group">
                                <label for="description">AuthorsDescription</label>
                                <textarea class="form-control" name="description" id="description" rows="3" {{$errors->has('description') ? 'class=has-error' : ''}}>{{Request::old('description')
                             ? Request::old('description') : isset($post) ? $post->author_description : ''}}</textarea>
                            </div>
                            <input type="hidden" name="_token" value="{{Session::token()}}"/>
                            <input type="hidden" name="post_id" value="{{$post->id}}"/>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <button type="submit" class="btn btn-danger">Clear</button>

                        </form>
                    </div>
                    <div class="col-md-4  content-box">
                        <h4>Tips</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
                        <div>
                            <img src="{{URL::to('img/uploads/admin/posts/'.$post->picture)}}" class="img-responsive img-full">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('scripts')
    <script>
        window.onload = function(){
            CKEDITOR.replace('body');
            CKEDITOR.replace('description');
        }
    </script>
@endsection

