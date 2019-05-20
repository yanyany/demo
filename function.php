<?php
/*header("content-type:text/html;charset=utf-8");
function threeclass(){
	echo "threeclass";
}
threeclass();
threeclass();

threeclass();
threeclass();

echo "<hr>";
function table($title,$row,$col){
	echo "<table align='center' border='1' width='800px'>";
	echo "<caption><h1>".$title."</h1></caption>";
	for($i = 0;$i<$row;$i++){
		$bgcolor = $i%2 == 0 ? "#ffffffff" : "#ddddddd";
		echo "<tr bgcolor=".$bgcolor.">";
		for($n = 0; $n<$col;$n++){
			echo "<td>".($i*10+$n)."</td>";
		}
		echo "</tr>";

	}
	echo "</table>";
}
table('一班',3,3);
table('二班',4,4);
table('三班',5,5);*/


$one = 200;
$two = 100;

function demo(){
	/*global $one,$two;
	$three = $one+$two;*/
	static $a = 0;
	echo $a;
	$a++;
	
}
demo();
demo();
//echo $two;


?>
