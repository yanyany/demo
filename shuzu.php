<?php
header("content-type:text/html;charset=utf-8");   
function table(){

	echo "<table border='1' algin='center' width='800'>";
	echo "<caption>表格</caption>";
	for($i = 0; $i<10;$i++){
		$bgcolor= $i%2 == 0 ? '#cccccc' : '#dddddd';
		echo "<tr bgcolor=".$bgcolor.">";
		for($n = 0;$n<10;$n++){
			echo "<td>1</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
table();
function tables($caption,$rol,$col){

	echo "<table border='1' algin='center' width='800'>";
	echo "<caption>".$caption."</caption>";
	for($i = 0; $i<$rol;$i++){
		$bgcolor= $i%2 == 0 ? '#cccccc' : '#dddddd';
		echo "<tr bgcolor=".$bgcolor.">";
		for($n = 0;$n<$col;$n++){
			echo "<td>1</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
tables('a',4,3);