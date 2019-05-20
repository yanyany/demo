<?php
/*header("content-type:text/html;charset=utf-8");
//初始化数值；条件表达式；增量
for ($i=1; $i <= 5; $i++) { 
	echo "这是第".$i."次循环"."<br>";
}
echo "<hr>";
for($i = 1;$i<10;$i++){
	for($j = 1;$j<=$i;$j++){
		echo $i ."*".$j ."=".$i*$j."&nbsp;&nbsp";
	}
	echo "<br>";

}echo "<hr>";

	for ($i=1; $i < 10 ; $i++) { 
		# code...
	for ($g=1; $g <= $i; $g++) { 
		# code...
		echo "$i"."*"."$g"."=".$i*$g;
	}
	echo "<br>";
	 }

	 echo "<hr>";
	 echo "<hr>";
	 echo "<hr>";
	 echo "<hr>";
	 for($i = 1;$i<10;$i++){
	 	for($j = 1;$j<=$i;$j++){
	 		echo $i ."*".$j ."=".$i*$j."&nbsp;&nbsp;";
	 	}
	 	echo "<br>";
	 }



	 echo "<hr>";
/*$ar = array("a","b","c","d");
if(in_array("f", $ar)){
	echo "Got f";
}else{
	echo "Got f";

}

$ar = array("id"=>1,"name"=>"11","age"=>11);
$id = each($ar);
print_r($id);
echo "<br>";
$id = each($ar);
print_r($id);
echo "<br>";
$id = each($ar);
print_r($id);
echo "<br>";
$id = each($ar);
var_dump($id);
echo "<br>";
echo "<hr>";
//list()清单 列表
//
$content = array("id"=>1,"name"=>"1","age"=>"2");
list($key,$value) = each($content);
list($key,$value) = each($content);
echo $key."=>".$value;
// echo "<hr>";
// echo "<hr>";
// echo "<hr>";
// echo "<hr>";
// while(list($key,$value) = each($content)){
// 	echo $key."=>".$value;
// }
// 
echo "<hr>"; 
$arrs = array("id"=>2,"name"=>"aa","age"=>1);
print_r(array_flip($arrs));
echo "<br>";
print_r(array_reverse($arrs));
echo "<hr>";
echo substr(123456, 2);
echo substr('php最简单',2);
echo "<hr>";
$str = "php";
echo $str[0];
echo strlen($str);*/
class Site { 
  /* 成员变量 */ 
  var $url; 
  var $title; 
   
  /* 成员函数 */ 
  function setUrl($par){ 
     $this->url = $par; 
  } 
   
  function getUrl(){ 
     echo $this->url . PHP_EOL; 
  } 
   
  function setTitle($par){ 
     $this->title = $par; 
  } 
   
  function getTitle(){ 
     echo $this->title . PHP_EOL; 
  }    
} 

$runoob = new Site(); 
$taobao = new Site(); 
$google = new Site(); 

// 调用成员函数，设置标题和URL 
$runoob->setTitle( "菜鸟教程" ); 
$taobao->setTitle( "淘宝" ); 
$google->setTitle( "Google 搜索" ); 

$runoob->setUrl( 'www.runoob.com' ); 
$taobao->setUrl( 'www.taobao.com' ); 
$google->setUrl( 'www.google.com' ); 

// 调用成员函数，获取标题和URL 
$runoob->getTitle(); 
$taobao->getTitle(); 
$google->getTitle(); 
echo "<br>";
$runoob->getUrl(); 
$taobao->getUrl(); 
$google->getUrl(); 


?>