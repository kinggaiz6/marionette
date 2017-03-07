<html>
@extends('layouts.master1')
@section('content')
  @foreach($content as $cont)

  <div class="inner">
  	<header>
  		<h1>{{$cont->cont_name}} 이야기 입니다.</h1>
  		<p>{{$cont->cont_detail}}</p>
  	</header>
  	<section class="tiles">
          <article class="">
              <div class="bookWrap">
                  <div id="formBook">
                      <div class="hard"><div class="title"><p class="title">{{$cont->cont_name}}</p></div></div>
                      <div class="hard">


                        <table  width = "60%" cellpadding="0" cellspacing="20" rules = none>
                         <tr align="center" >
                            <td colspan="5"><div style="width: 360px; height: 360px; overflow: hidden">
                            <img src= {{$cont->cont_image}}
                            style="width: 360px; height: 360px; ">
                          </div></td>
                         </tr>
                         <tr>
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
                        </table>
                      </div>
                      <div>
                          <video width="100%" height="100%" controls="controls">
                              <source src="{{$cont->cont_video}}" type="video/mp4" />
                          </video>
                      </div>
                  </div>
              </div>
          </article>
  	</section>

  	  <form name = "puchaseForm" action = "/purchase?name={{$cont->cont_name}}" method="post">
          <input type="hidden" name="product_number" value="{{}}">
          <input type="submit" value="제품 구매"/>
      </form>
  </div>
  <script type="text/javascript">
      $('#formBook').turn({
          width:800,
          height:600,
          autocenter: false
      });
      $('body').keydown(function(e){
         if(e.keyCode == '39' || e.keyCode == '32') $('#formBook').turn('next');
         if(e.keyCode == '37') $('#formBook').turn('previous');
      });

  </script>

@endforeach

</form>

</div>


</body>
</html>
@stop
