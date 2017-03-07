<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

	<style type="text/css">
		.find_id_pw{
			text-align:center;
		}
		.login{
			width:450px;
			height:450px;
		}
		.close{
			position:relative;
			right:10px;
			bottom:10px;
		}
	</style>

</head>
<body>
	<div class="login">
		<div class="login-form">
			<h1>로그인</h1>
      <form name = "loginForm" action = "/loginAction" method="post">
				<input type="text" class="form-control" placeholder="아이디" name="user_id" >
				<input type="password" class="form-control" placeholder="비밀번호" name="user_password">
				<input type="submit" class="btn btn-primary form-control" value="Login"/>
				<div class="find_id_pw">
          <br>
					<a href="">아이디 찾기</a> | <a href="">패스워드 찾기</a>
				</div>
			</form>
			<a class="close">X</a>
		</div>
	</div>
	<script>
		$("a.close").click(function(){
			$("#popup").css("visibility","hidden");
			$("#wrapper").css("opacity","1");
			});
	</script>

</body>
</html>
