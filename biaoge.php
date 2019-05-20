<?php
function a(){
	
$a = 1;

echo $a;
}

a();
echo "<hr>";
//表格
function table(){

	echo "<table border='1' width=500 height=50 algin='center'>";
	echo "<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
	</tr>";
	echo "</table>";
}
table();

function tableTwo(){
	echo "<table border='1' width='800'>";
	for($i = 0;$i<4;$i++){
		$color = $i%2 == 0 ? '#ccc' : '#ddd';
		echo "<tr bgcolor=".$color.">";
		for($n = 0; $n<4; $n++){
			echo "<td>1</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
tableTwo();
?>