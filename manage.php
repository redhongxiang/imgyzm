<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理系统首页</title>
</head>

<body>
<?php if($_SESSION['login']=="success"){ ?>
欢迎[<?php echo $_SESSION['userName']; ?>]<a href="safeout.php">安全退出</a>
<?php }else{
	echo '<script type="text/javascript">location.href="error.php";</script>';
	}
?>
</body>
</html>