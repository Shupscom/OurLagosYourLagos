@extends('layouts.master')
@section('title')
    Contacts
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center" style="color:red">Contact
                        <strong>Our Lagos Your Lagos</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>080356782</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row" style="background: #f7f7f7"  >
            <div class="box" >
                <div class="col-lg-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form role="form" method="post" action="{{route('contacts')}}">
                        <div class="row">
                            <div class="form-group col-lg-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>Name</label>
                                <input type="text"  name="name" id="name" class="form-control">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-4 {{ $errors->has('tel') ? ' has-error' : '' }}">
                                <label for="tel">Phone Number</label>
                                <input type="tel" name="tel"  id="tel" class="form-control">
                                @if ($errors->has('tel'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('tel') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12 {{$errors->has('message') ? 'class=has-error' : ''}}">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="6" ></textarea>
                                @if ($errors->has('message'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <input type="hidden" name="_token" value="{{Session::token()}}"/>
                                <button type="submit" class="btn btn-danger" style="background: red">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection