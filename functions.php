<?php
header("content-type:text/html;charset=utf-8");
function table(){
	echo "1234";
}
table();
table();
echo "<hr>";
function a(){
	echo "<table align='center' border='1' width='800px'>";
	echo "<caption>表格隔行换色</caption>";
	for($i = 0;$i<10;$i++){
		$bgcolor = $i%2 == 0 ? "red" : "blue";
		echo "<tr bgcolor=".$bgcolor.">";
		for($n = 0; $n<10;$n++){
			echo "<td>".($i*10+$n)."</td>";
		}

		echo "</tr>";
	}
	echo "</table>";
}
a();

function b($title,$rows,$cols){
	echo "<table align='center' border='1' width='800px'>";
	echo "<caption>".$title."</caption>";
	for($i = 0;$i<$rows;$i++){
		$bgcolor = $i%2 == 0 ? "red" : "blue";
		echo "<tr bgcolor=".$bgcolor.">";
		for($n = 0; $n<$cols;$n++){
			echo "<td>".($i*10+$n)."</td>";
		}

		echo "</tr>";
	}
	echo "</table>";
}
b('这是一个三行四列的表格',5,);



?>