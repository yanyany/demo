<?php
if (isset($_POST['name3'])) {
	if (!is_numeric($_POST['name1'])) {
		echo  "第一个数字是否是纯数字";
		# code...
	}
	if (!is_numeric($_POST['name2'])) {
		echo "第三个输入是否是纯数字";
		# code...
	}

	
}
?>
<meta charset="utf-8">
<table>
	<caption>简易计算器</caption>
<form action="" method="post">
<tr>
<td><input type="text" name="name1" value=""> </td>
<td>
<select name="number">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="%">%</option>

</select>
</td>
<td><input type="text" name="name2" value=""></td>
<td><input type="submit" name="name3" value="提交"></td>
</tr>
<?php
echo "<td>";
if(isset($_POST['name3']))
switch ($_POST['number']) {
	case '+':

		$num=$_POST['name1']+$_POST['name2'];
		# code...2
		break;
	case '-':

		$num=$_POST['name1']-$_POST['name2'];
		# code...2
		break;
	case '*':

		$num=$_POST['name1']*$_POST['name2'];
		# code...2
		break;
	case '/':

		$num=$_POST['name1']/$_POST['name2'];
		# code...2
		break;
	
	
	default:
		$num=$_POST['name1']%$_POST['name2'];
		# code...
		break;
}
echo  "结果为：".$_POST['name1'].$_POST['number'].$_POST['name2'].'='.$num;
echo "</td>";

?>
</form>
</table>