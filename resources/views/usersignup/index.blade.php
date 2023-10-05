<!DOCTYPE html>
<html>
<head>
	<title>회원가입</title>
	<link href="{{asset('./my/css/userlogin.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="box">
     	<h2>회원가입</h2>


          <label>이름</label>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value=""><br>

          <label>아이디</label>
               <input type="text" 
                      name="uname" 
                      placeholder="ID"
                      value=""><br>

     	<label>비밀번호</label>
     	<input type="password" 
                 name="password" 
                 placeholder="password"><br>

          <label>비밀번호 재입력</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="password"><br>

     	<a href="http://gamejigix.induk.ac.kr/~team12/cinema/public"><button type="submit">회원가입</button></a>
          <a href="{{ route('userlogin.index') }}" class="ca">계정이 이미 있으십니까?</a>
          </div>
</body>
</html>