<?php
if (isset($_POST['sum'])) {
	if(!is_numeric($_POST['num1'])){
		echo "第一个输入框不是纯数字";
	}
	if(!is_numeric($_POST['num2'])){
		echo "第二个输入框不是纯数字";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>简易计算器</title>
	<meta charset="utf-8">

</head>
<body>
	
	<table border="1" align="center">
	<form action="" method="post">
	<caption>计算器</caption>
<tr>
	<td><input type="text" name="num1"></td>
	<td>
<select name="opt">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
	<option value="%">%</option>
</select>
	</td>
<td><input type="text" name="num2"></td>
<td><input type="submit" name="sum" value="计算"></td>
</tr>
	</form>
	</table>

</body>
</html>