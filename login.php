
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
 
<html xmlns="http://www.w3.org/1999/xhtml ">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="gb2312" />
<title>��½</title>
</head>

<body>
<form action="get.php" method="get">
  ����:<input type="text" name="name" value=""><br>
  ����:<input type="password" name="password" value=""><br>
  <input type="submit" name="" value="�ύ">
</form>
</body>
<html>


<?php
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_GET['name'])){
  $name=$_GET['name'];
  $password=$_GET['password'];
 // echo "���ύ������:".$name."<br>"."���ύ��������:".$password;
 echo "<table border='1'>
 <caption>�ύ���</caption>
  <tr>
  <td>���ύ������</td>
  <td>���ύ������</td>
  </tr>
  <tr>
  <td>".$name."</td>
  <td>".$password."</td>
  </tr>

 </table>";
}

  
  

?>

