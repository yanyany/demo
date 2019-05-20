<?php

session_start();

header("Content-type:image/Png");

$image = imagecreatetruecolor(100,30);

$color = imagecolorallocate($image,255,255,255);

imagefill($image,20,20,$color);

$code='';

for($i=0;$i<4;$i++){
	$fontSize = 8;
	/*$x = rand(5,10)+$i*100/4;
	$y = rand(5,15);*/
	$x = rand(5,10)+$i*100/4;
	$y = rand(5,15);
	$data = 'abcdefghijklmnopqrstuvwxyz1234567890';
	$string = substr($data,rand(0,strlen($data)),1);
	//echo $string;die;
	$code .= $string;
	$color = imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
	imagestring($image,$fontSize,$x,$y,$string,$color);
}
$_SESSION['code'] = $code;

for($i=0;$i<200;$i++){
	$pointColor = imagecolorallocate($image,rand(100,255),rand(100,255),rand(100,255));
	imagesetpixel($image,rand(0,100),rand(0,30),$pointColor);
}


for($i=0;$i<2;$i++){
	$linePoint = imagecolorallocate($image,rand(150,255),rand(150,255),rand(150,255));
	imageline($image,rand(50,50),rand(10,20),rand(80,90),rand(15,25),$linePoint);
}


imagepng($image);
imagedestroy($image);