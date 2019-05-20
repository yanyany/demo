<?php
  
//php数据类型：字符串，整型（整数），浮点型（小数），数组
//字符串能输出任何文本，可以单引号 也可以双引号
$a = "hello world";

$b = 'hello world';//
echo $a;
echo "<br>";
echo $b;
echo "<hr>";
//整数是没有小数点的数字
//规则：1.没有小数点 2.正负均可 3,不可有逗号或者空格
$c = -30;
var_dump($c);
echo "<hr>";
//浮点数是具有小数点的数字（float）正负均可
$d = -9.77;
var_dump($d);
echo "<hr>";
//数组是在一个变量中储存多个值，下标从0开始
$car = array("BMW","BENC","QQ");
var_dump($car);
echo "<hr>";
echo "<table border='1' width='200' height='200'>
<tr>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
</tr>
</table>";
die;//打断
$a = 10;
$A = 30;
//php中没有创建变量的命令，变量会在他首次赋值的时候被创建
//$a 叫变量
//概念：php变量是一个储存信息的容器
//命名规则：1.已$符号开头，后边是变量名称
//2.已字母开头
//3.不能已数字开头
//4.能包含字母，数字 下划线
//5.对大小写敏感
$b = 20;
$c = $a + $b;
echo $c;
echo "<hr>";
//php运算符 + - * / %
//php赋值运算符
//概念：用于向变量中写值
$d = 40;
$e = 20;
//$d += $e; //相当于 $d = $d + $e
//x += y 相当于 x = x+y
//$d *= $e;//d = d *e
$d  %= $e; //d = d % e

echo $d;

?>