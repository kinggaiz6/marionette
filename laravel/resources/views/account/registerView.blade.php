<html>
@extends('layouts.master1')
@section('content')
<head>
  <title>회원가입</title>
  <meta charset="utf-8">
</meta>

</head>
<body>

<center>
  <div style="width: 800px; height: 600px; overflow: hidden">

  <form name = "registerForm" action="/register" method="post">
  <table class="signup-table">
  						<tr>
  							<td>아이디</td>
  							<td><input type="text" name="user_id"/></td>
  							<td>이 름</td>
  							<td><input type="text" name="user_name"/></td>
  						</tr>
  						<tr>
  							<td>비밀번호</td>
  							<td><input type="password" name="user_password"/></td>
  							<td>비밀번호 확인</td>
  							<td><input type="password" name="user_pw_chk"/></td>
  						</tr>
  						<tr>
  							<td colspan="4">
  								<input type="submit" value="가입" />
  								<input type="reset" value="다시작성"/>
  							</td>
  						</tr>
  					</table>
</center>
</form>
</body>
</html>
</div>

<script>
function prevPage(){
  history.back();
}
</script>
@stop
