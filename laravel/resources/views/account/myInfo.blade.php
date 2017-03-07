
<html>

@extends('layouts.master')
@section('content')


<body>
    <input type="button" value="이전으로" onClick="prevPage()">

<form>
  @foreach($user as $value)
  <div style= "float:left">
    <div >
      <h2>
              <p>아이디 : {{$value->user_id}}</p>
              <p>이름 : {{$value->user_name}}</p> </div>
      </h2>
  </div>
  @endforeach
</form>
</div>
@stop
<script>
function prevPage(){
history.back();
}
</script>
</body>
</html>
