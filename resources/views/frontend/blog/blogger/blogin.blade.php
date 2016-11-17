<!DOCTYPE html>
<html>
<head>
    <title>BloggerLogin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="{{URL::to('src/img/favicon-32x32.png')}}">
    <!-- Bootstrap -->
    <link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{URL::to('src/css/styles.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="#">OLYL Blogger Admin</a></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <h6>Sign In</h6>
                        @include('includes.info-box')
                        <form method="post" action="{{route('blogger.login')}}">
                            <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <input type="hidden" name="_token" value="{{Session::token()}}"
                            <div class="action">
                                <input type="submit" class="btn btn-primary signup"  value="Login">
                                <input type="submit" class="btn btn-danger signup" value="Clear">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="already">
                    <p>Don't have an account yet?</p>
                    <a href="#">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{URL::to('src/js/jquery.js')}}"></script>
<script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>

<script src="{{URL::to('src/js/custom.js')}}"></script>
</body>
</html>