<div class="col-lg-12 text-center top">
    <p style="color:#fff">Official Website</p>
</div>
<div class="brand" style="background: #fff200">
    <img src="{{URL::to('src/img/resized.jpg')}}">
    Our Lagos Your Lagos</div>
<div class="address-bar"style="background:red">To achieve it, we do it; together</div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="{{route('index')}}">Our Lagos Your Lagos</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('group')}}">Groups</a></li>
                        <li><a href="{{route('akin')}}">Akinwunmi Ambode</a></li>
                        <li><a href="{{route('operations')}}">Operational Activities</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('projects')}}">Projects</a>
                </li>
                <li>
                    <a href="{{route('blog')}}">Blogs</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Multimedia<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('photo')}}">Photos</a></li>
                        <li><a href="{{route('video')}}">Videos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('witness')}}">I-witness</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
