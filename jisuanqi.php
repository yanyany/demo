<!DOCTYPE html>
<html>
<head>
	<title>计算机</title>
	<meta charset="utf-8">
</head>
<body>

<?php
$mess = '';
if(isset($_POST['sub'])){
	if($_POST['num1']){
		if(!is_numeric($_POST['num1'])){
			echo $mess . "第一个数必须输入纯数字"."<br>";
		}
	}else{
		echo $mess . "请输入第一个数字"."<br>";
	}	

		if($_POST['num2']){
		if(!is_numeric($_POST['num2'])){
			echo $mess . "第二个数必须输入纯数字"."<br>";
		}
	}else{
		echo $mess . "请输入第二个数字"."<br>";
	}	
}



?>
<table border="1" align="center">
<form action="" method="post" >
<caption>计算器</caption>
<tr>
<td>
<input type="text" name="num1" value="">
</td>
<td>
<select name="opt">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="%">%</option> 
<!-- <option value="+" >+</option>
<option value="-" >-</option>
<option value="*" >*</option>
<option value="/" >/</option>
<option value="%" >%</option> -->
</select>

</td>
<td>
<input type="text" name="num2" value="">
</td>
<td><input type="submit" name="sub" value="计算"></td>
</tr>

<?php
if(isset($_POST['sub'])){
	echo "<tr><td colspan='4'>";
	if(!$mess){
		$sum = 0;
		
		switch($_POST['opt']){
			case "+":
			$sum = $_POST['num1'] + $_POST['num2'];
			break;
			case "-":
			$sum = $_POST['num1'] - $_POST['num2'];
			break;
			case "*":
			$sum = $_POST['num1'] * $_POST['num2'];
			break;
			case "/":
			$sum = $_POST['num1'] / $_POST['num2'];
			break;
			case "%":
			$sum = $_POST['num1'] % $_POST['num2'];
			break;
		}
		echo "结果:{$_POST['num1']} {$_POST['opt']} {$_POST['num2']} = {$sum}";
	}else{
		echo $mess;
	}
	echo "</td></tr>";
}
?>
</form>

</table>
</body>
</html>