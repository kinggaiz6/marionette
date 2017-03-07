

<html>

<head>
  <?php if (isset($title)): print $this->escape($this).'-'; endif; ?>
  <meta charset="utf-8">
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://homestead.app/css/mario.css">
</link>

</head>
<body>

    <header>
      <br>
    <h3>Marionett</h3>
  </header>
  <header>
  <h2>
    <a href="/adminmain">HOME&nbsp;</a>
    @if(Session::has('user_name'))
  <a href="/logout">로그아웃</a>
    <a href="/myPageAdmin">마이페이지</a>
    <a href="/createMarioAdmin">createMario</a>
    @endif
  </h2>
  @if(Session::has('user_name'))
  <h3>{{(Session::get('user_name'))}} 관리자님 환영합니다.</h3>
  @else
  <form name = "loginForm" action = "/login" method="post">
  <table>

        <tr>
          <td><h2>아이디&nbsp;</h2></td><td><input type="text" name="user_id"  /></td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><h2>패스워드&nbsp;</h2></td><td><input type="password" name="user_password" /></td>
          <td>&nbsp;&nbsp;</td>
          <td><input type="submit" name="login" value="로그인"/></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
         </tr>
     </table>
   </form>

  @endif

   <!-- //////////////////////////////// -->


  </header>
    <nav>
      <ul >
        <br>
        <p>분 류</p>
        <br>
      <li><a href="/myPageAdmin/?num=1">&nbsp;&nbsp;&nbsp;등록된 컨텐츠</a></li>
       <li><a href="/myPageAdmin/?num=2">&nbsp;&nbsp;&nbsp;미검토 컨텐츠</a></li>

      </ul>
    </nav>
    <div id="main">
      <br>
    </div>

    @yield('content')
    <footer>
    <br>
    <br>
    <br>
    <h2>Maironette</h2>
         <h2>GlobalMansAndWoman</h2>
         <h2>Copyright ⓒ. All rights reserved.</h2>
     </footer>
</body>
</html>
