
<html>
@extends('layouts.adminMaster2')
@section('content')
<link rel="stylesheet" type="text/css" href="http://homestead.app/css/mario.css">

<body>
<div class="productBack">


@foreach($content as $cont)
<div style= "float:left">
  <div>
    {{$path = ''}}
    @if($cont->cont_check == 1)
  <font color ="white">  {{$path = '/Reviewed'}} </font>
    @else
  <font color ="white"> {{$path = '/Unreviewed'}} </font>
  @endif
    <a href= '{{$path}}?name={{$cont->cont_name}}'>
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
