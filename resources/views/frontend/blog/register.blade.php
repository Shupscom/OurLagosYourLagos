@extends('layouts.master')
@section('title')
    Register Blogger
@endsection
@section('styles')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="box" >
                    <p>Register here to be a Blogger on our Website</p>
                    <form method="post" action="{{route('blogger.new')}}" enctype="multipart/form-data" id="form" data-parsley-validate>
                        <div class="form-group">
                            <label for="name">Fullname</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="FullName" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            <label for="image">Picture</label>
                            <input type="file" name="file" id="file" class="form-control" required="">
                        </div>
                        <input type="submit" class="btn btn-success" value="Submit">
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <button type="reset" class="btn btn-danger ">Clear</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <p>Additional Ads</p>
                        <img src="{{URL::to('src/img/paris.jpg')}}" alt="" class="img-responsive" style="margin-bottom: 10px">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <p>Advertisement</p>
                        <img src="{{URL::to('src/img/paris.jpg')}}" alt="" class="img-responsive" style="margin-bottom: 10px">
                    </div>
                </div>
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

@endsection
@section('scripts')
      <script>
//          $('#form').parsley();
      </script>
@endsection
