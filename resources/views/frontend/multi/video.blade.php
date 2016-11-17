@extends('layouts.master')
@section('title')
   Lagos Videos
@endsection
@section('styles')
   <link rel="stylesheet" href="{{URL::to('src/css/ekko-lightbox.css')}}"/>
   <link rel="stylesheet" href="{{URL::to('src/css/ekko-lightbox.min.css')}}"/>
@endsection
@section('content')
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="intro-text text-center" style="font-size:34px; color:#000;font-weight: 700;text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
               {{--<hr>--}}
               <strong>OUR LAGOS AND YOUR LAGOS VIDEOS</strong>
               {{--<hr>--}}
            </h2>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="box">
                  <a href="http://www.youtube.com/watch?v=k6mFF3VmVAs" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4">
                     <img src="//i1.ytimg.com/vi/yP11r5n5RNg/mqdefault.jpg" class="img-fluid">
                  </a>
                  <a href="http://youtu.be/iQ4D273C7Ac" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4">
                     <img src="//i1.ytimg.com/vi/iQ4D273C7Ac/mqdefault.jpg" class="img-fluid">
                  </a>
                  <a href="//www.youtube.com/embed/b0jqPvpn3sY" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4">
                     <img src="//i1.ytimg.com/vi/b0jqPvpn3sY/mqdefault.jpg" class="img-fluid">
                  </a>
               </div>

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
         $(this).ekkoLightbox();
      });
   </script>
@endsection