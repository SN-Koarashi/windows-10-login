<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Taipei');
if(!$_SESSION['member']){
	exit();
}
if($_POST['submit']){
	require_once ('config.php');
	$sql="SELECT member_password FROM member WHERE member_user='".$_SESSION['member']."'";
	$rs=$db->query($sql)->fetch(PDO::FETCH_ASSOC);
	if(hash('SHA256',$_POST['password_login']) == $rs['member_password']){
		$_SESSION['console_login'] = $_SESSION['member'];
		setcookie('error_msg_login',"",time()-60);
		header('location:../minecraft');exit;
	}
	else{
		setcookie('error_msg_login',"密碼錯誤",time()+60);
		header('location:./');exit;
	}
}
?>
<!DOCTYPE html>
<html lang="zh_TW" >

<head>
  <meta charset="UTF-8">
  <title>系統驗證</title>
      <link rel="stylesheet" href="css/style.css?v=2">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div class="bg"></div>
<div class="wrapper">
  <div <?php if($_COOKIE['error_msg_login']){echo 'style="display:none;"';};?> class="Page1">
  <div id="datetime">
    <div class="time">
      <h1><?php echo date("H:i");?></h1>
    </div>
    <div class="date">
      <h1><?php echo date("Y/m/d");?></h1>
    </div>
	</div>
  </div>
  <div <?php if($_COOKIE['error_msg_login']){echo 'style="display:block;"';};?> class="Page2">
    <div class="userLogo"><img src="css/user.png"/></div>
    <div class="userName">
      <h1><?php echo $_SESSION['member'];?></h1>
    </div>
	<form class="onLogin" name="theForm" id="theForm" method="post" action="">
    <input placeholder="" class="passwordInput" name="password_login" type="password" required />
	<label title="提交" class="label"><i style="color:#FFF;font-size:2.5em;" class="material-icons">arrow_forward</i><input style="display:none;" id="submit" name="submit" type="submit" /></label>
	</form>
	<a href="javascript:onLogin();" class="login"><i>登入</i></a>
    <div class="userEmail">
      <h1><?php echo $_COOKIE['error_msg_login'];?></h1>
    </div>
  </div>
  <div class="welcome">
	<img style="position:absolute;left:50%;margin-top:-5px;margin-left:-130px;" src="css/loading.gif" width="80" />歡迎
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script  src="js/index.js?v=2"></script>
</body>
</html>
