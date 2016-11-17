<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Our Lagos Your Lagos</title>
    <!--Favicon -->
    <link rel="icon" type="image/x-icon" href="{{URL::to('src/img/favicon-32x32.png')}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('src/css/frontendstyle.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="col-lg-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <strong>TODAY</strong>
                    </div>
                    <div class="panel-body">
                        <p class="text-center" style="margin-bottom: 0">OCT</p>
                       <h1 class="text-center" style="margin: 0; font-size: 3em">20</h1>
                        <hr style="width: 100px; margin-top: 0; margin-bottom: 5px; opacity: 0.3">
                       <span class="text-center"><i class="fa fa-calendar fa-3x small-logo"></i></span>
                        <p class="text-center">Events</p>
                        <hr style="width: 100px; margin-top: 0; margin-bottom: 5px; opacity: 0.3">
                        <span class="fa-stack fa-2x" style="width:100%;">
                        <i class="fa fa-camera fa-stack-1x"></i>
                        <i class="fa fa-ban fa-stack-2x text-danger" style="color:red;"></i>
                        </span>
                        <p class="text-center">Out of Bound</p>
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
                            <img class="img-responsive img-full" src="{{URL::to('src/img/slide-1.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3 style="color:#fff200">VISION AND MISSION</h3>
                                <p style="color:#fff">
                                    A Lagos State imbued with active participation from all stakeholders, in order to engender continuous and rapid positive growth; that is mutually beneficial.
                                </p>
                                <p><a class="btn btn-lg btn-danger" href="#" role="button" style="background:  red;">View More</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="{{URL::to('src/img/slide-2.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3 style="color:#fff200">
                                    TAG-LINE
                                </h3>
                                <p style="color:#fff">
                                    “To achieve it, we do it; together”
                                    This speaks of breaking barriers and forging ahead; in love and unity. It is shortened to ‘…we do it; together’, especially
                                    when employed in our call and response chant; “OUR LAGOS, YOUR LAGOS! We do it; together!”
                                </p>
                                <p><a class="btn btn-lg btn-danger" href="#" role="button" style="background:  red;">View More</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="{{URL::to('src/img/slide-3.jpg')}}" alt="">
                            <div class="carousel-caption">
                                <h3 style="color:#fff200">Our Lagos Your Lagos</h3>
                                <p style="color:#fff">OUR LAGOS YOUR LAGOS is a proactive organization using the hinges of unity and cooperation to seek an improved and better Lagos State. Embracing combined roles of mediator, catalyst and advisor, we seek to seamlessly make all aspects of Lagos State thrive and flourish, focusing primarily on the human resources and the relationship between government and the people  </p>
                            </div>
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
                {{--<h2 class="brand-before">--}}
                    {{--<small>Welcome to</small>--}}
                {{--</h2>--}}
                {{--<h1 class="brand-name">Business Casual</h1>--}}
                {{--<hr class="tagline-divider">--}}
                {{--<h2>--}}
                    {{--<small>By--}}
                        {{--<strong>Start Bootstrap</strong>--}}
                    {{--</small>--}}
                {{--</h2>--}}
            </div>
            </div>
        </div>
</div>
<!-- /.container -->



<div class="container-fluid" style="margin-top: 5px;background: #fff200">
    <div class="row">
        <div class="col-lg-12" style="background: red; height: 40px">
             {{--News Marqueee can come in here --}}
            <h4 style="color:#fff">Live Update:</h4>
        </div>
            <div class="col-lg-10 col-lg-offset-1">

                <h2 class="intro-text text-center" style="font-size:34px; color:#000;font-weight: 700;text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                    <hr>
                    <strong> OUR BEDROCK</strong>
                    <hr>
                </h2>

                {{--<img class="img-responsive img-border img-left" src="{{URL::to('src/img/intro-pic.jpg')}}" alt="">--}}

                 <p class="text-justify text-center">Relationships are built on trust and understanding. Achievements are made from good relationships. Discordance stifles achievements.
                     Typical of any relationship, the union of government and the people can witness discordance, when there are sabotage, bureaucratic delays, selfishness, and most importantly; when duties/responsibilities of both parties are shirked. The outcome goes from divergence, attrition and gap, to stagnation, decay and collapse.
                     There is the need for a buffer/bridge.
                     There is the need for OUR LAGOS YOUR LAGOS
                 </p>
            </div>

            <div class="row text-center">
             <div class="col-lg-10 col-lg-offset-1">
                 <div class="col-lg-8">
                 <div class="col-sm-6">
                                 <div class="thumbnail">
                                     {{--<img src="{{URL::to('src/img/paris.jpg')}}" alt="">--}}
                                     <span class="glyphicon glyphicon-globe logo"></span>
                                     <p><strong>NEWS</strong></p>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,.</p>
                                 </div>
                 </div>
                 <div class="col-sm-6">
                     <div class="thumbnail">
                         {{--<img src="{{URL::to('src/img/newyork.jpg')}}" alt="">--}}
                         <span class="glyphicon glyphicon-comment logo"></span>
                         <p><strong>BLOGS</strong></p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,.</p>
                     </div>
                 </div>
                 <div class="col-sm-6">
                     <div class="thumbnail">
                         {{--<img src="{{URL::to('src/img/newyork.jpg')}}" alt="">--}}
                         <span class="glyphicon glyphicon-map-marker logo"></span>
                         <p><strong>PLACES IN LAGOS </strong></p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,.</p>
                     </div>
                 </div>
                 <div class="col-sm-6">
                     <div class="thumbnail">
                         {{--<img src="{{URL::to('src/img/paris.jpg')}}" alt="">--}}
                         <span class="glyphicon glyphicon-book logo"></span>
                         <p><strong>DIARY</strong></p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus,.</p>
                     </div>
                 </div></div>
                 <div class="col-sm-4" style="background: #000">
                     <h4 style="color:#fff200">Tweets from Twitter</h4>
                     <div class="list-group">
                         <a href="#" class="list-group-item">
                             <h4 class="list-group-item-heading">List group item heading</h4>
                             <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur</p>
                         </a>
                     </div><h4 style="color:#fff200">Lagos Issues</h4>
                     <div class="list-group">
                         <a href="#" class="list-group-item">
                             <h4 class="list-group-item-heading">List group item heading</h4>
                             <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur</p>
                         </a>
                     </div><h4 style="color:#fff200">Lagos Policies</h4>
                     <div class="list-group">
                         <a href="#" class="list-group-item">
                             <h4 class="list-group-item-heading">List group item heading</h4>
                             <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur</p>
                         </a>
                     </div>
                 </div>
             </div>
            </div>
    </div>
    </div>

<footer>
    <div class="container">
        <div class="row" style="color: #fff;margin-top:20px; ">
            <div class="col-lg-12 text-center">
                <div class="col-lg-4">
                    <h4>Blog</h4>
                    <h4>News</h4>
                    <h5>I-witness</h5>
                    <h4>Policies</h4>
                </div>
                <div class="col-lg-4">
                    <h4>Places in Lagos</h4>
                    <h4>Diary</h4>
                    <h4>Issues</h4>
                    <h4>Projects</h4>
                </div>
                <div class="col-lg-4">
                    <a class="btn pull-right" href="#"><i class="fa fa-linkedin-square fa-3x" style="color: #fff"></i></a>
                    <a class="btn pull-right" href="#"><i class="fa fa-google-plus-square fa-3x" style="color: #fff"></i></a>
                    <a class="btn pull-right" href="#"><i class="fa fa-whatsapp fa-3x" style="color: #fff"></i></a>
                    <a class="btn pull-right" href="#"><i class="fa fa-twitter-square fa-3x" style="color: #fff"></i></a>
                    <a class="btn pull-right" href="#"><i class="fa fa-facebook-square fa-3x" style="color: #fff"></i></a>
                </div>
            </div>
               <div class="col-lg-12 text-center">
                   <p class="text-center" style="margin-top: 10px">Copyright &copy; Our Lagos Your Lagos <?php echo date('Y')?></p>
                   </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{URL::to('src/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
