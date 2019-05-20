<?php
error_reporting(E_ALL ^ E_NOTICE); 

if(isset($_GET["sum"])){
  $s1=$_GET['num1'];
  $s2=$_GET['num2'];
  $sum=$_GET['sum'];
  if($sum=='+'){$s=$s1+$s2;}
  elseif($sum=='-'){$s=$s1-$s2;}
  elseif($sum=='X'){$s=$s1*$s2;}
  elseif($sum=='/'){$s=$s1/$s2;}
  else{@$s=($s1)%($s2 );}
  //echo $s;
/*$s = $_GET['num1'],$_GET['sum'],$_GET['num2'];
echo $s;*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
<html xmlns="http://www.w3.org/1999/xhtml ">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="gb2312" />
<title>php计算器</title>
</head>

<body>
<form action="jsq.php" method="get">
<table border="1" align="center" cellspacing="0">
  <caption>简易计算器</caption>
  <tr>
    <td><input name="num1" type="text" id="num1" value="<?php if(isset($_GET['num1']))echo $_GET['num1'] ?>" /></td>
    <td><select name="sum" id="sum">
      <option value="+" <?php if($_GET["sum"]=="+")echo "selected"; ?>>+</option>
      <option value="-" <?php if($_GET["sum"]=="-")echo "selected"; ?>>-</option>
      <option value="X" <?php if($_GET["sum"]=="X")echo "selected"; ?>>X</option>
      <option value="/" <?php if($_GET["sum"]=="/")echo "selected"; ?>>/</option>
      <option value="%" <?php if($_GET["sum"]=="%")echo "selected"; ?>>%</option>
    <select>
    </td>
    <td><input name="num2" type="text" id="num2" value="<?php if(isset($_GET['num2']))echo $_GET['num2'] ?>" /></td>
    <td><input type="submit" value="计算结果" /></td>
    <?php
    if($_GET['num1']==false){
    echo "";
      }elseif($_GET['num2']==false){
    echo "";
      }elseif($_GET['sum']==false){
       echo "";
      }else{ ?>
       <td>计算结果:<?php echo $s ?></td>
    <?php  }
    ?>
  </tr>
</table>
</form>
</body>
<html>

