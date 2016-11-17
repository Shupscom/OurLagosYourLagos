@extends('layouts.master')
@section('title')
   I-WITNESS
@endsection
@section('styles')
   <style>
   .thumbnail {
   padding:0;
   }
   </style>
   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   <script>tinymce.init({
         selector:'textarea',
         plugins: "image"
      });
   </script>
@endsection
@section('content')
   <div class="container">
      <div class="row">
         <div class="box">
            <div class="col-lg-12">
            <div class="col-lg-6">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
               <form role="form" method="post" action="{{route('witness')}}" enctype="multipart/form-data" data-parsley-validate>
                  <div class="row">
                     <div class="form-group {{ $errors->has('topic') ? ' has-error' : '' }}">
                        <label>Topic</label>
                        <input type="text"  name="topic" id="topic" class="form-control" required="">
                        @if ($errors->has('topic'))
                           <span class="help-block">
                            <strong>{{ $errors->first('topic') }}</strong>
                        </span>
                        @endif
                     </div>
                     <div class="form-group {{ $errors->has('reporter') ? ' has-error' : '' }}" >
                        <label for="reporter">Reporter's Name</label>
                        <input type="text" name="reporter" id="reporter" class="form-control" required="">
                        @if ($errors->has('reporter'))
                           <span class="help-block">
                            <strong>{{ $errors->first('reporter') }}</strong>
                        </span>
                        @endif
                     </div>
                     <div class="form-group ">
                        <label for="file">Picture</label>
                        <input type="file" name="file"  id="file" class="form-control" required="">
                        @if ($errors->has('file'))
                           <span class="help-block">
                            <strong>{{ $errors->first('file') }}</strong>
                        </span>
                        @endif
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group {{$errors->has('details') ? 'class=has-error' : ''}}">
                        <label for="message">Details</label>
                        <textarea class="form-control" name="details" id="details" rows="6"></textarea>
                        @if ($errors->has('details'))
                           <span class="help-block">
                            <strong>{{ $errors->first('details') }}</strong>
                        </span>
                        @endif
                     </div>
                     <div class="form-group">
                        <input type="hidden" name="save" value="contact">
                        <input type="hidden" name="_token" value="{{Session::token()}}"/>
                        <button type="submit" class="btn btn-danger" style="background: red">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-lg-6">
               @if(count($witness) == 0)
               <h2 class="text-center">No Witness Yet</h2>
               @else
               @foreach($witness as $wit)
               <div class="col-lg-6">
                  <div class="thumbnail">
                     <img src="{{URL::to('img/uploads/admin/witness/'.$wit->picture)}}">
                     <div class="caption">
                        <h4 id="topic">{{$wit->topic}}</h4>
                        <p class="text-justify">{{$wit->details}}</p>
                        <a href="{{route('witness.single',['witness_id'=> $wit->id])}}" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-comment">Comments</i></a> <span href="#" class="">Reporter: {{$wit->reporter_name}}</span>
                     </div>
                  </div>
               </div>
               @endforeach
               @endif
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('scripts')
   {{--<script>--}}
      {{--var token = '{{Session::token()}}';--}}
      {{--var url = '{{route('witness')}}';--}}

      {{--$('form').submit(function( event ) {--}}
         {{--event.preventDefault();--}}
         {{--$.ajax({--}}
            {{--url: url,--}}
            {{--type: 'post',--}}
            {{--data: $('form').serialize(), // Remember that you need to have your csrf token included--}}
            {{--dataType: 'json',--}}
            {{--success: function(data){--}}
               {{--console.log(data)--}}
               {{--alert(data['data'])--}}
               {{--$('#topic').text(data['data']);--}}

            {{--},--}}
            {{--error: function(data){--}}
{{--//--}}
            {{--}--}}
         {{--});--}}
      {{--});--}}
   {{--</script>--}}
@endsection