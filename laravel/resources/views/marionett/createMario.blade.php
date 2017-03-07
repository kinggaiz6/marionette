
<html>

@extends('layouts.master1')
@section('content')

<div align=center>


  <form action="/createMarioAction" method="post" enctype="multipart/form-data">
  <table  width = "30%" cellpadding="0" cellspacing="0" rules = none>
   <tr align="center" >
      <td colspan="5">시나리오 만들기</td>
   </tr>
   <tr>
     <td colspan="5"> &nbsp &nbsp </td>
   </tr>
   <tr>
     <td colspan="5"> &nbsp &nbsp </td>
   </tr>


   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
        <div align="center">컨텐츠 분류</div>
      </td>
      <td>
        <select name ="cont_category">
          <option>컨텐츠 카테고리를 선택하세요
          <option>-------------------------------
          <option value ='fairytale'selected>동화
          <option value ='childrenSong'>동요
          <option value ='English' >영어
        </select>
      </td>
   </tr>

   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">이 름</div>
      </td>
      <td>
         <input name="cont_name" type="text" size="15" maxlength="10"
             />
      </td>
   </tr>

   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">효과음</div>
      </td>
      <td>
         <input name="cont_effect_sound" type="text" size="10" maxlength="10"
             />
      </td>
   </tr>


      <tr>
         <td style="font-family:돋음; font-size:13" height="16">
            <div align="center">배경음악선택</div>
         </td>
         <td>
            <input name="cont_background_sound" type="text" size="10" maxlength="10"
                />
         </td>
      </tr>
   <tr>
      <td style="font-family:돋음; font-size:13" height="16">
         <div align="center">녹음하기</div>
      </td>
      <td>
         <input name="cont_voice" type="text" size="10" maxlength="10"
             />
      </td>
   </tr>
      <tr>
         <td style="font-family:돋음; font-size:13" height="16">
               <div align="center"><a href ="/makeMoving"><font color="red">움직임등록</font></a></div>
            </td>
            <td>
            <input name="cont_moving" type="text" size="10" maxlength="10">
          </td>
         </td>

            <tr>
               <td style="font-family:돋음; font-size:13" height="16">
                  <div align="center">마리오사진</div>
               </td>
              <td>
                 <input type="file" name="cont_image" id="fileToUpload"
                 multiple="multiple">
               </td>
            </tr>
      <tr>
         <td style="font-family:돋음; font-size:13" height="16">
            <div align="center">미리보기영상</div>
         </td>
         <td>
           <input type="file" name="cont_video" id="fileToUpload">
         </td>

      </tr>
   <tr>
      <td style="font-family:돋음; font-size:13">
         <div align="center">상세내용</div>
      </td>
      <td>
         <textarea name="cont_detail" cols="100" rows="30"></textarea>
      </td>
   </tr>

   <tr><td>&nbsp;</td></tr>

   <tr align="left">
      <td>
        <div align="left">
  <td><input type="submit" name="login" value="등 록"/></td></div>
      </td>
   </tr>

</table>
</form>
</body>

@stop

</html>
