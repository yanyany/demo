<?php
header("content-type:text/html;charset=utf8");
$con = mysqli_connect("127.0.0.1","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  mysqli_select_db($con,'kaoshi');
  if(isset($_POST['zc'])){
  	 $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $password = md5($_POST['password']);

  $sql = "insert into login (`id`,`name`,`phone`,`address`,`sex`,`age`,`password`) values ('','{$name}','{$phone}','{$address}','{$sex}','{$age}','{$password}')";

  	$data = mysqli_query($con,$sql);
  	if($data){
  		echo "注册成功";
  	}else{
  		echo "注册失败";
  	}
  }else{
  	$phone = $_POST['phone'];
  	$password = md5($_POST['password']);
  	$sql = "select * from login where `phone`='{$phone}'";

  	$sqldata = mysqli_query($con,$sql);
  	$a = mysqli_fetch_array($sqldata);
  	if($a){
  		$pass = $a['password'];
  		if($password != $pass){
  			echo "密码错误";
  		}else{
  			echo "登陆成功";
  		}
  	}else{
  		echo "没有该用户";
  	}
  }
 


?>