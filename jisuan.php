
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
<?php
if(isset($_POST['sum'])){
	echo "<tr><td colspan='4'>";
	if(!is_numeric($_POST['num1'])){
		echo "第一个输入框不是纯数字";
		return false;
	}
	if(!is_numeric($_POST['num2'])){
		echo "第三个输入框不是纯数字";
		return false;
	}
	switch ($_POST['opt']) {
		case '+':
			# code...
			$number = $_POST['num1'] + $_POST['num2'];
			break;
		case '-':
			# code...
			$number = $_POST['num1'] - $_POST['num2'];
			break;
		case '*':
			# code...
			$number = $_POST['num1'] * $_POST['num2'];
			break;
		case '/':
			# code...
			$number = $_POST['num1'] / $_POST['num2'];
			break;
		
		default:
			# code...
			$number = $_POST['num1'] % $_POST['num2'];
			break;
	}
	echo "结果:".  $_POST['num1'] .$_POST['opt']. $_POST['num2']. '=' .$number;
	echo "</td></tr>";
}

?>
</form>
</table>

</body>
</html>