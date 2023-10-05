<!DOCTYPE html>
<html>
<head>
	<title>로그인</title>
	<link href="{{asset('./my/css/userlogin.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
     <div class="box">
     	<h2>로그인</h2>
     	
     	<label>아이디</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>비밀번호</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<a href="http://gamejigix.induk.ac.kr/~team12/cinema/public"><button type="submit">로그인</button></a>
          <a href="{{ route('usersignup.index') }}" class="ca">회원가입</a>
     </div>
</body>
</html>