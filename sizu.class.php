<?php

//1 创建画布
$width=500;
$height=300;
$image = imagecreatetruecolor($width,$height);

//2 创建颜色
//返回一个表示福，代表由给定的RGB成分组成的颜色
$red = imagecolorallocate($image,255,0,0);
$blue = imagecolorallocate($image,0,0,255);
$white=imagecolorallocate($image,255,255,255);
//3 开始绘画
//水平的画一个字符
//参数 第一个实在哪个画布上 2 字体大小 3坐标 4 字符内容 5 颜色
imagechar($image,5,50,100,'k',$red);
//垂直显示字符
imagecharup($image,5,100,200,'k',$blue);
//水平绘制字符串
imagestring($image,5,200,150,'three class',$white);


//4 告诉浏览器已图片的形式来显示
header('content-type:image/jpeg');

//5 输出图像到浏览器
imagejpeg($image);

//6 销毁资源
imagedestroy($image);