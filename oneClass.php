<?php
header("content-type:text/html;charset=utf-8");
//string字符串
$string = "我们是一班";
echo $string;
echo "<br>";
//整数
$int = 30;
var_dump($int);
//浮点型
$float = 4.4;
var_dump($float);
echo "<br>";
//数组
$array = array("red","blue","yellow","pink");
print_r($array);
echo "<hr>";
//length(长度)
//strlen 返回字符串长度
$x = "hello world";
echo strlen($x);
echo "<br>";
//strpos 用于检索字符串内指定字符的位置
//因为字符串首字母的位置是从0开始而不是1
echo strpos($x,'world');
//ucwords 每一个单词的首字母大写
echo "<br>";
echo ucwords($x);
echo "<br>";
//ucfirst 第一个单词的首字母大写
echo ucfirst($x);
//strtoupper 所有字母变成大写
echo "<br>";
echo strtoupper($x);
echo "<br>";
//strtolower 所有字母变成小写
$y = 'HELLO WORLD';
echo strtolower($y);

echo "<hr>";echo "<hr>";echo "<hr>";

//php常量 概念:常量类似变量，一旦定义无法更改
//define("","","")
//书写规则：首个参数定义常量的名称；第二个参数是定义常量的值；第三个参数可选，默认是false,是否对大小写敏感
define("x","1",true);
echo X;



?>