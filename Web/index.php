<!DOCTYPE html>
<html lang="zh_TW" >

<head>
  <meta charset="UTF-8">
  <title>Windows 10 Login</title>
      <link rel="stylesheet" href="css/style.css?v=2">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="bg"></div>
<div class="wrapper">
  <div class="Page1">
  <div id="datetime">
    <div class="time">
      <h1>00:13</h1>
    </div>
    <div class="date">
      <h1>2018/06/20</h1>
    </div>
	</div>
  </div>
  <div class="Page2">
    <div class="userLogo"><img src="css/user.png"/></div>
    <div class="userName">
      <h1>Admin</h1>
    </div>
	<form class="onLogin" name="theForm" id="theForm" method="post" action="">
    <input placeholder="" class="passwordInput" name="password_login" type="password" required />
	<label title="提交" class="label"><i style="color:#FFF;font-size:2.5em;" class="material-icons">arrow_forward</i><input style="display:none;" id="submit" name="submit" type="submit" /></label>
	</form>
	<a href="javascript:onLogin();" class="login"><i>Login</i></a>
    <div class="userEmail">
      <h1></h1>
    </div>
  </div>
  <div class="welcome">
	<img style="position:absolute;left:50%;margin-top:-5px;margin-left:-180px;" src="css/loading.gif" width="80" />Welcome
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script  src="js/index.js?v=2"></script>
</body>
</html>
