@extends('layouts.master')
@section('title')
    Lagos Photos
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/ekko-lightbox.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('src/css/ekko-lightbox.min.css')}}"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="intro-text text-center" style="font-size:34px; color:#000;font-weight: 700;text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                        {{--<hr>--}}
                        <strong>OUR LAGOS AND YOUR LAGOS PHOTOS</strong>
                        {{--<hr>--}}
                    </h2>
                </div>
                </div>
            </div>
        <div class="row">
    <div class="box">
        <div class="col-lg-3">
            <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="egallery" class="col-sm-12">
                <img src="http://placehold.it/200x200" class="img-fluid">
            </a>
        </div>
        <div class="col-lg-3">
            <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="egallery" class="col-sm-12">
                <img src="http://placehold.it/200x200" class="img-fluid">
            </a>
        </div>
        <div class="col-lg-3">
            <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="egallery" class="col-sm-12">
                <img src="http://placehold.it/200x200" class="img-fluid">
            </a>
        </div>
        <div class="col-lg-3">
            <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="egallery" class="col-sm-12">
                <img src="http://placehold.it/200x200" class="img-fluid">
            </a>
        </div>
    </div>
    </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="egallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-3">
                    <a href="http://placehold.it/500x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="http://placehold.it/200x200" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-12">
                        <img src="http://placehold.it/200x200" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::to('src/js/ekko-lightbox.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('src/js/ekko-lightbox.min.js')}}"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox(

            );
        });
    </script>
@endsection