@extends('layouts.master')
@section('title')
  Projects
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
          <h2 class="intro-text text-center" style="font-size:34px; color:red;font-weight: 700;text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
            <strong>PROJECTS IN LAGOS</strong>
          </h2>
          <br>
        </div>
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Bridge" data-body="Lorem ipsum dolor sit amet, consectetur adipisicing elit" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            </a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="box">
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="box">
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-sm-4 text-center">
          <a href="http://placehold.it/750x450" data-toggle="lightbox" data-title="AbuleEgba Brideg" data-footer="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
          <img class="img-responsive" src="http://placehold.it/750x450" alt=""></a>
          <h4 class="policy-heading">AbuleEgba Bridge</h4>
          <p class="policy" style="color:red">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="clearfix"></div>
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
     $(this).ekkoLightbox({
       alwaysShowClose: true,
       onShown: function() {
         console.log('Checking our the events huh?');
       },
       onNavigate: function(direction, itemIndex) {
       console.log('Navigating '+direction+'. Current item: '+itemIndex);
    }
     });
    });

  </script>
@endsection