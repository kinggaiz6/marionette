<html>
@extends('layouts.adminMaster2')
@section('content')

<body>
<div class="productBack">
<form action="" method="post" enctype="multipart/form-data">

  @foreach($content as $cont)
<table  width = "60%" cellpadding="0" cellspacing="20" rules = none>
 <tr align="center" >
    <td colspan="5"><div style="width: 360px; height: 360px; overflow: hidden">
    <img src= {{$cont->cont_image}}
    style="width: 360px; height: 360px; ">
  </div></td>
 </tr>
 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>
 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>

    <td style="font-family:돋음; font-size:15" height="16">
       <div align="left">카테고리: {{$cont->cont_category}}</div>
    </td>
 </tr>
 <tr>
    <td style="font-family:돋음; font-size:15" height="16">
       <div align="left">상품이름: {{$cont->cont_name}}</div>
    </td>
 </tr>
 <tr>
    <td style="font-family:돋음; font-size:15" height="16">
       <div align="left">가격: {{$cont->cont_price}}</div>
    </td>
 </tr>
 <tr>
    <td style="font-family:돋음; font-size:15">
       <div align="left">제품설명: {{$cont->cont_detail}}</div>
 </tr>

 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>
 <tr>
   <td colspan="5"> &nbsp &nbsp </td>
 </tr>
 <tr>
    <td style="font-family:돋음; font-size:20">
       <div align="center"> <a style="color: black" href='/approval?name={{$cont->cont_name}}'>등록승인</a>
         <a style="color: black"href="/preview">미리보기</a></div>
 </tr>

</table>
@endforeach

</form>

</div>


</body>
</html>
@stop
