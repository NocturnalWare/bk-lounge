@extends('layouts.master')

@section('content')

    <div class="col-xs-12" style="height:100%;margin-top:50px;">
        <iframe class="col-sm-12 hidden-sm hidden-md hidden-lg" width="100%" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-sm-12 hidden-xs hidden-md hidden-lg" width="640" height="360" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-sm-12 hidden-xs hidden-sm hidden-lg" width="853" height="480" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
        <iframe class="col-sm-12 hidden-xs hidden-sm hidden-md" width="1280" height="720" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
    </div>

@stop