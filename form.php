


<!DOCTYPE html>
<html>
<head>
	<title>表单提交</title>
	<meta charset="utf-8">
</head>
<body>

<form action="" method="get">

	姓名:<input type="text" name="xm" value=""><br>
	密码:<input type="password" name="mm" value="">
	<br>
	<input type="submit" name="tj">
</form>
</body>
</html>


<?php
if(isset($_GET['tj'])){
	if($_GET['xm'] == ''){
		echo "请输入姓名";
	}elseif($_GET['mm'] == ''){
		echo "请输入密码";
	}else{
		echo "
		<table border='1'>
			<tr><td>姓名</td><td>密码</td></tr>
			<tr><td>".$_GET['xm']."</td><td>".$_GET['mm']."</td></tr>
		</table>
		";
	}

}

?>