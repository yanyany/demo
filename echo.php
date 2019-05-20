<?php
header("content-type:text/html;charset=utf-8");//解决php中文乱码
echo "我们是三班";
echo "<hr>";
$a = 455;
$b = 66656;
$c = $a - $b;
echo $c;
var_dump($c);//打印数据类型
print_r($c);
echo "<hr>";

$str = "hello world";
echo $str;
echo "<br>";
$str1 = "hello world";
print($str1);
echo "<br>";
$str2 = array(11,22,33);
print_r($str2);
echo "<br>";
$str3 = array(11,22,33);
var_dump($str3);



?>