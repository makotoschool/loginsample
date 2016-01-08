<?php
session_start();
$username="admin";
$password="pass2222";
$errormsg='';

if(isset($_POST['login'])){
	if($_POST['loginname']==$username&&$_POST['pass']==$password){
		session_regenerate_id(TRUE);
		$_SESSION['loginname']=$_POST['loginname'];
		header('Location:main.php');
		exit;				
		}else{
		$errormsg='ユーザー名、パスワードが一致しません';	
		}
}	



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<title>ログイン</title>
</head>
<body>
<div class="container">
	<h1>ログインの仕組みを簡単に理解できるサンプル</h1>
	<div class="loginbox">
		<h2>ログインしてください</h2>
		<form method="post" action="" class="login">
		<p>
		<label for="loginname">ユーザー名</label>
		<input name="loginname" type="text" placeholder="adminと入力してね">
		</p>
		<p>
		<label for="pass">パスワード</label>
		<input name="pass" type="text" placeholder="pass2222と入力してね">
		</p>
		<input type="submit" name="login" value="ログインする">
		
		</form>
		<?php 
		if($_SERVER["REQUEST_METHOD"] != "POST"){
			echo '';
		}else{
		
		echo "<p class='msg'>$errormsg</p>"; 
		}
		?>
	
	</div>
	<p class="info">
	ソースコードはgithubにアップしています<br>
	<a href="https://github.com/makotoschool/loginsample" target="blank">https://github.com/makotoschool/loginsample</a>
	</p>
	

</div>
</body>
</html>