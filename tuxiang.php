<?php

//打开session
session_start();
header("content-type:image/Png");
//session 是存到服务器上的  cookie是存到浏览器上的
/*$_SESSION['a'] = '111';
$_SESSION['b'] = '222';
var_dump($_SESSION['b']);
var_dump($_SESSION['a']);*/
//创建画布
$image = imagecreatetruecolor(100,30);
//创建颜色
$color = imagecolorallocate($image,255,255,255);
//填充画布
imageFill($image,10,20,$color);

//字符
for($i=0;$i<4;$i++){
	$font = 8;
	//$code = '';
	//画布共宽100 需要平分四个数值 并且每个数值之间要有间距，所以用$i 除以4 是因为一共又4个值 
	$x = rand(5,10)+100*$i/4;
	$y = rand(5,10);
	$stringcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
	$data = 'qwertyuiopasdfghjklzxcvbnm1234567890';
	//用substr截取字符串  $data  rand是让他随机出来一位起始值  每次循环截取出来一位
	$string = substr($data,rand(0,strlen($data)),1);
	//$code .= $string;
	imagestring($image,$font,$x,$y,$string,$stringcolor);
}
$_SESSION['code'] = $string;

//画点
for($i=0;$i<200;$i++){
	$pointcolor = imagecolorallocate($image,rand(100,255),rand(100,255),rand(100,255));
	imagesetpixel($image,rand(0,100),rand(0,30),$pointcolor);
}
//划线

for($i=0;$i<5;$i++){
	$linecolor = imagecolorallocate($image,rand(0,100),rand(0,100),rand(0,100));
	imageline($image,rand(0,100),rand(0,30),rand(0,100),rand(0,30),$linecolor);
}
//生成图片
imagepng($image);
//销毁图像
imagedestroy($image);


