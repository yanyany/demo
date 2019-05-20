<?php
if(isset($_POST['sub'])){
	if(!is_numeric($_POST['num1'])){
		echo "第一个输入框不是纯数字";
	}
	if(!is_numeric($_POST['num2'])){
		echo "第二个输入框不是纯数字";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>简易计算机</title>
</head>
<body>
	<table border="1" align="center">

<caption>计算机</caption>
<form method="post" action="">
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
<td><input type="submit" name="sub"></td>
</tr>
</form>
<?php
if(isset($_POST['sub'])){
	echo "<tr><td colspan='4'>";
	switch ($_POST['opt']) {
		case '+':
			# code...
			$number = $_POST['num1'] + $_POST['num2'];
			break;
		case '-':
			$number = $_POST['num1'] - $_POST['num2'];
			break;
		case '*':
			 $number = $_POST['num1'] * $_POST['num2'];
			break;
		case '/':
			 $number = $_POST['num1'] / $_POST['num2'];
			break;
		
		default:
			$number = $_POST['num1'] % $_POST['num2'];
			
			break;
	}
	echo $_POST['num1'] . $_POST['opt'] . $_POST['num2']."=".  $number;
	echo "</td></tr>";

}

?>
</table>
</body>
</html>