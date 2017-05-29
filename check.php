<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
	$userName=$_POST['userName'];
	$pwd=$_POST['pwd'];
	$info=$_POST['info'];
	$yh=$_POST['yh'];
	$index=$_POST['index'];
	if( $yh==$_SESSION['yzm'] || $index==1){
	include("conn.php");
	$rs=mysql_query("select * from user where username='$userName' and pass='$pwd'");
	$num=mysql_num_rows($rs);
	
	if($num>0){
		$_SESSION['login']='success';
		$_SESSION['userName']=$userName;
		if($info=='yes'){
			setcookie("index",1,time()+3600*24*10);
			setcookie("userName",$userName,time()+3600*24*10);
			setcookie("pwd",$pwd,time()+3600*24*10);
			}
	 echo '{"status":"1","msg":"成功"}';
		}else{
			echo '{"status":"0","msg":"用户名或密码不存在"}';
			}
	}else{
		echo '{"status":"2","msg":"验证码错误"}';
		}
}else{
	header("location:error.php");
}
?>