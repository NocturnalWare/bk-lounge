@extends('layouts.master')

@section('content')

@foreach($videos as $video)
<div class="col-md-4 col-sm-12">
	<img class="img-responsive" src="{{$video->image_url}}">
</div>
@endforeach

@stop