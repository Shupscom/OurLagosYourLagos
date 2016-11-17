<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="{{URL::to('src/img/favicon-32x32.png')}}">
      <!-- Bootstrap Core CSS -->
      <link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="{{URL::to('src/css/frontendstyle.css')}}" rel="stylesheet">
      <link href="{{URL::to('src/css/font-awesome.css')}}" rel="stylesheet">
      <link href="{{URL::to('src/css/parsley.css')}}" rel="stylesheet">

      <!-- Fonts -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

      <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      {{--<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>--}}
      {{--<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>--}}
      <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <script type="text/javascript">var switchTo5x=true;</script>
      <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
      <script type="text/javascript">stLight.options({publisher: "59fc688f-9322-449e-a05c-a5833837e4f1", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
      <![endif]-->

      @yield('styles')
  </head>
 <body onload="initialize()">
  @include('includes.header')
     @yield('content')
  @include('includes.footer')
  <!-- jQuery -->
  <script src="{{URL::to('src/js/jquery.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('src/js/parsley.min.js')}}"></script>
  <!-- Script to Activate the Carousel -->
 @yield('scripts')
 </body>
</html>
