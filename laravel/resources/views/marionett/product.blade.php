<html>
@extends('layouts.master')
@section('content')



<body>
<div class="productBack">

@foreach($content as $cont)
<div style= "float:left">
  <div > <a href='/productDetail?name={{$cont->cont_name}}'>
        <div style="width: 180px; height: 180px; overflow: hidden">
    <img src= {{$cont->cont_image}} style= "width: 180px; height: 180px;">
</div>
            <p>{{$cont->cont_category}}</p>
            <p>{{$cont->cont_name}}</p> </div>
      <div> <p>{{$cont->cont_price}}</p></div>
</a>
</div>
@endforeach
</div>





</body>





</html>
@stop
