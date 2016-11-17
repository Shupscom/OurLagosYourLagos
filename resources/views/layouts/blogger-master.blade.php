<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="{{URL::to('src/img/favicon-32x32.png')}}">
    <link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/styles.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/font-awesome.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>
<body>
@include('includes.blogger-header')
@yield('content')
{{--@include('includes.admin-footer')--}}
<script src="{{URL::to('src/js/jquery.js')}}"></script>
<script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('src/js/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/ckeditor/ckeditor.js')}}"></script>
@yield('scripts')
</body>
</html>
