
<html>
@extends('layouts.adminMaster')
@section('content')

<div style="width: 400px; height: 400px; overflow: hidden">

<p>컨테츠 판매 수: {{$count}}</p>
<p>컨탠츠 매출: {{$count*12000}}</p>
</div>

@stop
