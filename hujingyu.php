<?php
if(isset($_POST['tj'])){
	if (!is_numeric($_POST['num1'])) {
		echo "请在第一个输入框输入数字";
	}
	if (!is_numeric($_POST['num2'])) {
		echo "请在第二个输入框输入数字";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>计算器</title>
</head>
<body>
	<table>
		<caption>计算器</caption>
		<form action="" method="post">
		<tr>
			<td><input type="text" name="num1" value=""></td>
			<td>
				<select name="opt" id="">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
				</select>
			</td>
			<td><input type="text" name="num2" value=""></td>
			<td><input type="submit" name="tj" value="提交"></td>
		</tr>
	</form>
	<?php
	echo "<tr><td colspan='4'>";
	if (isset($_POST['tj'])) {
		switch ($_POST['opt']) {
			case '+':
				$number=$_POST['num1']+$_POST['num2'];
				break;
			case '-':
				$number=$_POST['num1']-$_POST['num2'];
				break;
			case '*':
				$number=$_POST['num1']*$_POST['num2'];
				break;
			case '/':
				$number=$_POST['num1']/$_POST['num2'];
				break;	
			default:
				$number=$_POST['num1']%$_POST['num2'];
				break;
		}
		echo $_POST['num1'].$_POST['opt'].$_POST['num2']."=".$number;
	}
	echo "</td></tr>";
	?>
	</table>
</body>
</html>