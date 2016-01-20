@extends('layouts.master')

@section('content')
<form method="post" action="{{route('videos.store')}}">

<br>
title <input name="title">
<br>
url <input name="url">
<br>
<button type="submit">Sub</button>
</form>


@stop