@extends('layouts.master')
@section('title')
    I-WITNESS
@endsection
@section('styles')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center">
                <img class="img-responsive img-border img-full" src="{{URL::to('img/uploads/admin/witness/'.$witness->picture)}}" alt="">
                <h2>{{$witness->topic}}
                    <br>
                    <small>{{$witness->created_at->diffForHumans()}}</small>
                </h2>
                <p>{{nl2br($witness->details)}}</p>
            </div>
            <div class="col-lg-4">
                <p>Do you wish to be blogger here Register below for membership</p>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')

@endsection