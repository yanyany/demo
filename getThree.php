<?php
header("content-type:text/html;charset=utf-8");
//$_GET['']接受get传过来的数据 括号里边是传过来的参数名
//isset()判断是否有参数传入
if(isset($_POST['name'])){
	$name = $_POST['name'];//接受get传过来的参数
$password = $_POST['password'];
echo $name;
echo "<hr>";
echo $password;
}else{

echo "没有传参数";
}

?>