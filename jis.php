<?php
//isset()判断有没有参数传过来 $_GET['']
if(isset($_POST['tijiao'])){
	if(!is_numeric($_POST['num1'])){
		echo "请输入纯数字";
	}
	if(!is_numeric($_POST['num2'])){
		echo "请输入纯数字";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>计算器</title>
	<meta charset="utf-8"/>
</head>
<body>
<table border="1" align="center">
<form action="" method="post">
<caption>简易计算器</caption>
<tr>
<td><input type="text" name="num1" value=""></td>
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
<td><input type="submit" name="tijiao"></td>
</tr>
<?php
if(isset($_POST['tijiao'])){
echo "<tr><td colspan='4'>";
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
		$number = $_POST['num1'] % $_POST['num2'];
		break;
}
echo "结果:".$_POST['num1'].$_POST['opt'].$_POST['num2']."=".$number;
echo "</td></tr>";	
}

?>
</form>
</table>
</body>
</html>