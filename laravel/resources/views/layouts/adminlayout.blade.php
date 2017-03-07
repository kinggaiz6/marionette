<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>마리오네트 관리자 페이지 입니다.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/mystyle.css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
		
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="js/jquery-1.9.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/turn.js"></script>
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="/" class="logo">
									<span class="symbol"><img src="img/logo.svg" alt="" /></span><span class="title">마리오네트</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>메뉴</h2>
						<ul>
							<li><a href="/">홈</a></li>
							<li><a href="/checkContents">업로드 컨텐츠 확인</a></li>
							<li><a href="/">인형샵</a></li>
							<li><a href="/createMario">이야기만들기</a></li>
							<!--로그인 했을때 세션처리-->
							<li><a href="/myPageAdmin">내 정보</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
							@yield('content')
					</div>
				<!-- Footer 발표때는 주석처리로 스크롤을 없앰-->
					<!--<footer id="footer">-->
					<!--	<div class="inner">-->
					<!--		<section>-->
					<!--			<h2>마리오네트 팀에게 연락을 주세요</h2>-->
					<!--			<form method="post" action="#">-->
					<!--				<div class="field half first">-->
					<!--					<input type="text" name="name" id="name" placeholder="이름" />-->
					<!--				</div>-->
					<!--				<div class="field half">-->
					<!--					<input type="email" name="email" id="email" placeholder="이메일" />-->
					<!--				</div>-->
					<!--				<div class="field">-->
					<!--					<textarea name="message" id="message" placeholder="메시지"></textarea>-->
					<!--				</div>-->
					<!--				<ul class="actions">-->
					<!--					<li><input type="submit" value="Send" class="special" /></li>-->
					<!--				</ul>-->
					<!--			</form>-->
					<!--		</section>-->
					<!--		<section>-->
					<!--			<h2>Follow</h2>-->
					<!--			<ul class="icons">-->
					<!--				<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>-->
					<!--				<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>-->
					<!--				<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>-->
					<!--				<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>-->
					<!--				<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>-->
					<!--				<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>-->
					<!--				<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>-->
					<!--				<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>-->
					<!--			</ul>-->
					<!--		</section>-->
					<!--		<ul class="copyright">-->
					<!--			<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>-->
					<!--		</ul>-->
					<!--	</div>-->
					<!--</footer>-->

			</div>

		<!-- Scripts -->
			<!--<script src="js/jquery.min.js"></script>-->
			<script src="js/jquery-ui.js" charset="utf-8"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>

	</body>
</html>
