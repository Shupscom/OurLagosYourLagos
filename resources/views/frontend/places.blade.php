@extends('layouts.master')
@section('title')
    Places in Lagos
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="intro-text text-center" style="font-size:34px; color:#000;font-weight: 700;text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                    <hr>
                    <strong>PLACES IN LAGOS</strong>
                    <hr>
                </h2>
            </div>
            <div class="col-lg-4 col-lg-offset-1 pull-right" >
                <form method="get" action="{{route('places')}}">
                    <div class="input-group">
                        <select name="search" id="search" class="form-control">
                            <option>Select a Category</option>
                            <option value="cinemas">Cinemas</option>
                            <option value="resort">Resort</option>
                            <option value="beach">Beach</option>
                            <option value="eateries">Eateries</option>
                            <option value="park">Amusement Park</option>
                            <option value="event">EventCenters</option>
                            <option value="monument">Monument</option>
                            <option value="mall">Shopping Mall</option>
                            <option value="games">Game and Recreational Centres</option>
                        </select>
                     <span class="input-group-btn">
                     <button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-search"></i> </button>
                     </span>
                    </div>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 text-center" style="border-left: 2px solid #f7f7f7;border-right: 2px solid #f7f7f7">
                @if(count($places) == 0)
                    No  places
                    @else
                @foreach($places as $place)
                <div class="box">
                    <div class="col-sm-6">
                        <img class="img-responsive img-full img-border-left" src="{{URL::to('img/uploads/admin/posts/'.$place->picture)}}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h4>{{$place->placename}}</h4>
                        <p>{{$place->description}}</p>
                        <p id="location">{{$place->location}}</p>
                        <div style="margin-top: 20px;">
                        <p class="pull-right"><a class="btn btn-default btn-lg" onclick="$('#view').modal();codeAddress()"><i class="fa fa-map-marker fa-2x" style="color:red"></i></a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="col-lg-2">

            </div>
        </div>
    </div>


    <!-- /.modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="view">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="map" style=" height: 480px;"></div>
                    <div>
                        {{--<input id="address" type="textbox" value="Sydney, NSW">--}}
                        {{--<input type="button" value="Encode" onclick="codeAddress()">--}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEtzyUQT3IbwfnxR8GDONV9bAbL5Cku_Q" type="text/javascript"></script>
    <script>
        var geocoder;
        var map;
        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var mapOptions = {
                zoom: 16,
                center: latlng
            }
            map = new google.maps.Map(document.getElementById('map'), mapOptions);

        }
        function codeAddress() {
            var address = document.getElementById('location').innerHTML;
            alert(address);
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == 'OK') {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

    </script>

@endsection
