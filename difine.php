<?php
header("content-type:text/html;charset=utf-8");
$number = 10;//变量
$number = 20;
echo $number;
echo "<hr>";

//difine() 概念：常量类似变量，但是常量一旦被定义就无法更改或者撤销
//书写规则：1首选参数（常量名称）；2常量的值；3可选，是否对大小写敏感，默认是false
define('numbers',10,true);
define('numberss',20,true);
echo NUMBERS;
echo "<hr>";
echo numberss;

echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
//rand(1，4)返回随机数 1如果括号中不写 范围为从0-最大值 2 如果写数值  随机数为这两个数的之间的值
$rand = rand(1,3);
if($rand == 1){
	echo "一等奖";
}elseif($rand == 2){
	echo "二等奖";
}else{
	echo "三等奖";
}
echo "<hr>";
switch ($rand) {
	case '1':
		# code...
		 echo "一等奖";
		break;//打断，跳出循环
	case '2':
		# code...
		echo "二等奖";
		break;
	default:
		# code...
		echo "三等奖";
		break;
}
echo "<hr>";
//获取当前时间

$date = date('Y-m-d H:i:s');
$time = time();
echo $time;echo "<br>";
echo $date;



?>