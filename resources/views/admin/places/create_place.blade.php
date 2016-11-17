@extends('layouts.admin-master')
@section('title')
    Create Place
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
                        <h3>Create a New Place</h3>
                        <form action="{{route('place.create')}}" method="post" enctype="multipart/form-data">
                            <div class="form-group {{ $errors->has('placename') ? ' has-error' : '' }}">
                                <label for="place">PlaceName</label>
                                <input class="form-control" type="text" name="placename" id="title" placeholder="PlaceName" value="{{Request::old('placename')}}"/>
                                @if ($errors->has('placename'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('placename') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="location">Location</label>
                                <input class="form-control" type="text" name="location" id="" placeholder="Location" value="{{Request::old('location')}}"/>
                                @if ($errors->has('location'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="categories">Categories</label>
                                <select name="categories" id="categories" class="form-control">
                                    <option>Select a Category</option>
                                    <option value="cinemas">Cinemas</option>
                                    <option value="resort">Resort</option>
                                    <option value="beach">Beach</option>
                                    <option value="eateries">Eateries</option>
                                    <option value="park">Amusement Park</option>
                                    <option value="event">EventCenters</option>
                                    <option value="monument">Monument</option>
                                    <option value="mall">Shopping Mall</option>
                                    <option value="games">Game and Recreational Centres</option>
                                </select>
                                @if ($errors->has('categories'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('categories') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file">Picture</label>
                                <input class="form-control"  type="file" name="file" id="file" />
                                @if ($errors->has('file'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('file') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3" {{$errors->has('body') ? 'class=has-error' : ''}}>{{Request::old('body')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <button type="submit" class="btn btn-danger">Clear</button>
                            <input type="hidden" name="_token" value="{{Session::token()}}"/>
                        </form>
                    </div>
                    <div class="col-md-4  content-box">
                        <h4>Tips</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque deserunt error perferendis repudiandae soluta tenetur, veritatis voluptatibus? Dignissimos hic illum officia repellendus, vero voluptatem! Architecto consequuntur ducimus ipsa quae rem.</p>
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
            CKEDITOR.replace('description');
        }
    </script>
@endsection
