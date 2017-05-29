<?php      //定义输出为图像类型
session_start();
$im=imagecreatefromjpeg("images/photo.jpg");		//载入照片
$textcolor=imagecolorallocate($im,56,73,136);//设置字体颜色为蓝色，值为RGB颜色值
$fnt="STLITI.TTF"; 
$str="ABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789";
$motto="";
for($i=1;$i<=4;$i++){
	$p=rand(0,35);
	$motto.=substr($str,$p,1);
	} 
$_SESSION['yzm']=$motto;
imageTTFText($im,20,0,10,25,$textcolor,$fnt,$motto);      //写TTF文字到图中
imagejpeg($im);       //建立JPEG图形
imagedestroy($im);    //结束图形，释放内存空间
?>
