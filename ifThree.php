<?php
header("content-type:text/html;charset=utf-8");
$number = rand(1,4);//生成随机数
//rand() 1.如果说括号里什么都不写，0-最大值
//2.第一个值是开始值，第二个是结束值，随机数的产生不超出这两个值的范围
////if语句
if($number == 1){
	echo $number."班";//连接符
}elseif($number == 2){
	echo $number."班";
}elseif($number == 3){
	echo $number."班";
}else{
	echo $number."班";
}

echo "<hr>";
//开关语句
switch ($number) {
	case '1':
		echo $number."class";
		break;
		
	case '2':
		echo $number."class";
		break;//打断，跳出循环
	case '3':
		echo $number."class";
		break;
	default:
		echo $number."class";
		break;
}
?>