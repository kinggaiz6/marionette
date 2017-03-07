
<html>
@extends('layouts.master1')
@section('content')
<div class="inner">
    <header>
      @if(Session::has('user_name'))
      <h3>{{(Session::get('user_name'))}}님 환영합니다.</h3>
      @endif
      <h1>어린이들을 위한 마리오네트<br />
      아이들에게 새로운 꿈과 희망을 심어주세요</h1>
      <br>
      <p>이제는 장난감으로 아이들에게 새롭게 접근하여 아이들의 교육의 질을 향상시킵니다</p>
    </header>
          <section class="tiles">
            @foreach($content as $cont)

              <article class="style1">
                <span class="image" style="width: 250px; height: 250px;">
                  <img src="{{$cont->cont_image}}" alt="" />
                </span>
                <a href="/productDetail?name={{$cont->cont_name}}">
                  <h2>{{$cont->cont_name}}</h2>
                  <h2>{{$cont->cont_price}}원</h2>
                  <div class="content">
                    <p>{{$cont->cont_detail}}</p>
                  </div>
                </a>
              </article>
              @endforeach
@stop
