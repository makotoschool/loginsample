<?php 
session_start();
if(!isset($_SESSION['loginname'])){
	header('Location:error.php');
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>main</title>
</head>
<body>
<div class="container">
<?php echo "<p>ようこそ".$_SESSION['loginname']."様</p>"; ?>
<h1>メインページです</h1>
</div>
</body>
</html>