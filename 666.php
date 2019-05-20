<?php
for($i=1;$i<10;$i++){
	for($j=1;$j<=$i;$j++){
	echo $i."*".$j."=".$j*$i
	."&nbsp;&nbsp;";
	}
	echo "<br>";

}
echo "<hr>";
echo "<hr>";
for($i = 9;$i>=1;$i--){
	for($j = 9;$j>=$i;$j--){
		echo $i ."*".$j ."=".$i*$j."&nbsp;&nbsp;";
	}
	echo "<br>";
}

?>