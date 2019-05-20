
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
 
<html xmlns="http://www.w3.org/1999/xhtml ">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="gb2312" />
<title>登陆</title>
</head>

<body>
<form action="get.php" method="get">
  姓名:<input type="text" name="name" value=""><br>
  密码:<input type="password" name="password" value=""><br>
  <input type="submit" name="" value="提交">
</form>
</body>
<html>


<?php
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_GET['name'])){
  $name=$_GET['name'];
  $password=$_GET['password'];
 // echo "您提交的姓名:".$name."<br>"."您提交的密码是:".$password;
 echo "<table border='1'>
 <caption>提交结果</caption>
  <tr>
  <td>您提交的姓名</td>
  <td>您提交的密码</td>
  </tr>
  <tr>
  <td>".$name."</td>
  <td>".$password."</td>
  </tr>

 </table>";
}

  
  

?>

