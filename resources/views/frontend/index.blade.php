@extends('layouts.master')
@section('title')
    OUR LAGOS YOUR LAGOS
@endsection
@section('styles')
    <style>
        .carousel{
               border: 5px solid #000000;
           }
        body{
            background-color:#cccccc;
        }

        .top-heading{
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif ;
            color: red;
            font-size: 20px;
            margin-bottom: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #fff;
            width:500px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 2px 2px 4px #000;
        }
        .icon-feature{
            color: #000000;
        }
        .icon-feature:hover{
            color: red;
        }

    </style>
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1" >
                <div class="col-lg-2">
                    <div class="panel panel-default" style="min-height: 390px; padding: 0">
                        <div class="panel-heading text-center">
                            <strong>TODAY</strong>
                        </div>
                        <div class="panel-body">
                            <p class="text-center text-uppercase" style="margin-bottom: 0;"><?php echo date('M');?></p>
                            <h1 class="text-center" style="margin: 0; font-size: 3em"><?php echo date('d');?></h1>
                            <hr style="width: 100px; margin-top: 0; margin-bottom: 5px; opacity: 0.3">
                            <span class="text-center"><i class="fa fa-calendar fa-3x small-logo"></i></span>
                            <p class="text-center">Events</p>
                            <hr style="width: 100px; margin-top: 0; margin-bottom: 5px; opacity: 0.3">
                            <span class="text-center"><i class="fa fa-info-circle fa-4x icon-logo"></i></span>
                            {{--<span class="fa-stack fa-2x" style="width:100%;">--}}
                            {{--<i class="fa fa-info-circle fa-2x"></i>--}}
                            {{--</span>--}}
                            <p class="text-center">Lagos State Information</p>


                        </div>
                    </div>
                    {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">--}}
                    {{--<h4 class="list-group-item-heading text-center" style="color: red">Policies</h4>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">--}}
                    {{--<h4 class="list-group-item-heading text-center" style="color: red">Issues</h4>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">--}}
                    {{--<h4 class="list-group-item-heading text-center" style="color:red">News</h4>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">--}}
                    {{--<h4 class="list-group-item-heading text-center"  style="color:red">Diary</h4>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">--}}
                    {{--<h4 class="list-group-item-heading text-center" style="color:red">Places</h4>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">--}}
                    {{--<h4 class="list-group-item-heading text-center" style="color:red">I-witness</h4>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                </div>
                <div class="col-lg-10 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="{{URL::to('src/img/slide.jpg')}}" alt="">
                                {{--<div class="carousel-caption">--}}
                                {{--<h3 style="color:#fff200">VISION AND MISSION</h3>--}}
                                {{--<p style="color:#fff">--}}
                                {{--A Lagos State imbued with active participation from all stakeholders, in order to engender continuous and rapid positive growth; that is mutually beneficial.--}}
                                {{--</p>--}}
                                {{--<p><a class="btn btn-lg btn-danger" href="#" role="button" style="background:  red;">View More</a></p>--}}
                                {{--</div>--}}
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="{{URL::to('src/img/slide.jpg')}}" alt="">
                                {{--<div class="carousel-caption">--}}
                                {{--<h3 style="color:#fff200">--}}
                                {{--TAG-LINE--}}
                                {{--</h3>--}}
                                {{--<p style="color:#fff">--}}
                                {{--“To achieve it, we do it; together”--}}
                                {{--This speaks of breaking barriers and forging ahead; in love and unity. It is shortened to ‘…we do it; together’, especially--}}
                                {{--when employed in our call and response chant; “OUR LAGOS, YOUR LAGOS! We do it; together!”--}}
                                {{--</p>--}}
                                {{--<p><a class="btn btn-lg btn-danger" href="#" role="button" style="background:  red;">View More</a></p>--}}
                                {{--</div>--}}
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="{{URL::to('src/img/slide.jpg')}}" alt="">
                                {{--<div class="carousel-caption">--}}
                                {{--<h3 style="color:#fff200">Our Lagos Your Lagos</h3>--}}
                                {{--<p style="color:#fff">OUR LAGOS YOUR LAGOS is a proactive organization using the hinges of unity and cooperation to seek an improved and better Lagos State. Embracing combined roles of mediator, catalyst and advisor, we seek to seamlessly make all aspects of Lagos State thrive and flourish, focusing primarily on the human resources and the relationship between government and the people  </p>--}}
                                {{--</div>--}}
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="container-fluid" style="margin-top: 5px;background: #fff;">
        <div class="row">
            <div class="col-lg-12 text-center" style="  background:red; padding: 50px">
                <p class="top-heading">These are nice features about Lagos State
                   <br>Enjoy all you need to know about Lagos</p>
                <div class="col-lg-3" style="">
                    <a href="{{route('news')}}">
                     <span class="fa-stack fa-4x text-center">
                        <i class="fa fa-circle fa-stack-2x text-primary icon-feature"></i>
                        <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                    </span>
                        </a>
                    <h3 class="features-heading">NEWS</h3>
                    <p class="features-para">Politics, Entertaiment, Sports, Fashion, Technology.</p>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('blog')}}">
                     <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary icon-feature"></i>
                        <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
                    </span>
                    </a>
                    <h3 class="features-heading">BLOGS</h3>
                    <p class="features-para">Blogs on Politics, Entertaiment, Sports, Fashion, Technology.</p>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('places')}}">
                     <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary icon-feature"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                        </a>
                    <h3 class="features-heading">PLACES IN LAGOS</h3>
                    <p class="features-para">Interesting and Fun places in Lagos State.</p>
                </div>
                <div class="col-lg-3">
                     <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary icon-feature"></i>
                        <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3 class="features-heading">DIARY</h3>
                    <p class="features-para">Diary of past events and activities in Lagos State.</p>
                </div>
            </div>
            <div class="col-lg-12" style="padding: 50px">
                <h2 class="intro-text text-center" style="font-size:34px; color:red;font-weight: bold;text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                    <strong> OUR BEDROCK</strong>
                </h2>
                <p class="text-justify text-center bedrock" style="padding-left: 30px">Relationships are built on trust and understanding. Achievements are made from good relationships. Discordance stifles achievements.
                    Typical of any relationship, the union of government and the people can witness discordance, when there are sabotage, bureaucratic delays, selfishness, and most importantly; when duties/responsibilities of both parties are shirked. The outcome goes from divergence, attrition and gap, to stagnation, decay and collapse.
                    There is the need for a buffer/bridge.
                    There is the need for OUR LAGOS YOUR LAGOS
                </p>
            </div>
            </div>
        <div class="row text-center" style="background-color: red">
            <div class="col-lg-12" style="padding: 40px">
                {{--<div class="col-lg-8">--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<div class="thumbnail">--}}
                            {{--<a href="{{route('news')}}"><img src="{{URL::to('src/img/globe.jpg')}}" alt="" style="height:137px"></a>--}}
                            {{--<span class="glyphicon glyphicon-globe logo2"></span>--}}
                            {{--<p><strong>NEWS</strong></p>--}}
                            {{--<p>Politics, Entertaiment, Sports, Fashion, Technology....</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<div class="thumbnail">--}}
                            {{--<a href="{{route('blog')}}"><img src="{{URL::to('src/img/blog.jpg')}}" alt="" style="height:137px"></a>--}}
                            {{--<a href="{{route('blog')}}"><span class="glyphicon glyphicon-comment logo"></span></a>--}}
                            {{--<p><strong>BLOGS</strong></p>--}}
                            {{--<p>Blogs on Politics, Entertaiment, Sports, Fashion, Technology....</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-sm-6">--}}
                        {{--<div class="thumbnail">--}}
                            {{--<a href="{{route('places')}}"> <img src="{{URL::to('src/img/place.png')}}" alt=""></a>--}}
                            {{--<a href="{{route('places')}}"><span class="glyphicon glyphicon-map-marker logo"></span></a>--}}
                            {{--<p><strong>PLACES IN LAGOS </strong></p>--}}
                            {{--<p>Interesting and Fun places in Lagos State</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-sm-6">--}}
                        {{--<div class="thumbnail">--}}
                            {{--<img src="{{URL::to('src/img/diary2.jpg')}}" alt="" style="height: 160px">--}}
                            {{--<span class="glyphicon glyphicon-book logo2"></span>--}}
                            {{--<p><strong>DIARY</strong></p>--}}
                            {{--<p>Diary of past events in Lagos State</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4" style="background: #000">--}}
                    {{--<div style="margin-top: 7px">--}}
                    {{--<a class="twitter-timeline" data-width="309" data-height="200" href="https://twitter.com/Olasupo_Kazeem">Tweets by Olasupo_Kazeem</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
                    {{--</div>--}}
                  {{--<div>--}}
                    {{--<p style="color:#fff200"><strong>LAGOS POLICIES</strong></p>--}}
                    {{--<div class="list-group">--}}
                        {{--<a href="#" class="list-group-item">--}}
                            {{--<h4 class="list-group-item-heading">List group item heading</h4>--}}
                            {{--<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur</p>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<p style="color:#fff200"><strong>LAGOS ISSUES</strong></p>--}}
                    {{--<div class="list-group">--}}
                        {{--<a href="#" class="list-group-item">--}}
                            {{--<h4 class="list-group-item-heading">List group item heading</h4>--}}
                            {{--<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur</p>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                        {{--</div>--}}
                <div class="col-lg-4">
                    <h4 class="policy-heading">LAGOS POLICIES</h4>
                    <p class="policy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto blanditiis cum cumque dolorum enim illum, libero numquam optio reprehenderit saepe, tempore voluptatibus. Delectus fugiat iste laudantium maiores, optio quasi.<span><a class="btn btn-danger" style="display: block; background-color: #fff200; color:#000">ReadMore</a></span></p>
                </div>
                <div class="col-lg-4">
                    <h4 class="policy-heading">LAGOS ISSUES</h4>
                    <p class="policy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto blanditiis cum cumque dolorum enim illum, libero numquam optio reprehenderit saepe, tempore voluptatibus. Delectus fugiat iste laudantium maiores, optio quasi.<span><a class="btn btn-danger" style="display: block; background-color: #fff200; color:#000">ReadMore</a></span></p>
                </div>
                <div class="col-lg-4" >
                    <h4 class="policy-heading">TWITTER FEEDS</h4>
                    <a class="twitter-timeline" data-width="309" data-height="200" href="https://twitter.com/ourlagyourlag">Tweets by ourlagyourlag</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>              </div>
                </div>
                </div>
            </div>



        </div>
@endsection
@section('scripts')
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
@endsection