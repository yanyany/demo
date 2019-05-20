<?php
header("content-type:text/html;charset=utf-8");
echo "<table border='1' width='500px' height='500px' align='center'>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>";
echo "<hr>";
$a =10;
$a += 40;
echo $a;
echo "<hr>";
echo "我们是三班";
echo "<hr>";
echo "11.11";

$array = array("aodi","baomao","linen");
var_dump($array);
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
//如何返回字符串的长度 length(长度)
//strlen 返回字符串的长度
$x = 'hello world';
echo strlen($x);
echo "<hr>";
//strpos 用于检测字符串中指定字符和文本
//字符的首字母是从0开始而不是从1
echo strpos($x,'world');
echo "<hr>";
//ucwords 每个单词的首字母大写
echo ucwords($x);
echo "<hr>";
//ucfirst 第一个单词的首字母大写
echo ucfirst($x);
echo "<hr>";
//strtoupper 所有字母大写
echo strtoupper($x);
echo "<hr>";
//strtolower 所有字母小写
$y = 'HELLO WORLD';
echo strtolower($y);

echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

//php常量  常量类似变量，但是常量一旦定义就无法更改或者撤销 define()
//规则:1.常量名称；2.常量值,3.可选，默认是false,是否对大小写敏感
define("HANDN","welcome to handan");
define("HANDAN","welcome ");
echo HANDAN;


define("LIUSHENGSHENG","LIUSHENGSHENGZHENBANG"，);
echo liushengsheng;


/*echo HANDANS;*/


?>