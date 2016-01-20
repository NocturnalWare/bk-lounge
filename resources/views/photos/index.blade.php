
<form method="post" action="{{route('videos.store')}}">
<input type="hidden" value="{{csrf_token()}}" name="_token">
<br>
title <input name="title">
<br>
url <input name="url">
<br>
<button type="submit">Sub</button>
</form>


