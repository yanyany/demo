

<?php

if(empty($_POST['zc'])){
$rands = rand(10000,99999);
	$rand = "获取短信验证码";
	$phone = '';
	$name= '';
	$password = '';
	if(!empty($_POST['qrcode'])){
		$rand = $rands;
		$phone = $_POST['phone'];
		$name = $_POST['name'];
		$password = $_POST['password'];
	}
}else{

	if($_POST['yzm'] != $_POST['yzmyz']){
		$rand = "验证码不一致";
		return false;
	}else{
		$rand = "验证码通过";
		$con = mysqli_connect("127.0.0.1","root","root");
		if(!$con){
			die('Could not connect: ' . mysql_error());
		}
		mysqli_select_db($con,"kaoshi");
			 $name = $_POST['name'];
		  $phone = $_POST['phone'];
		  $password = md5($_POST['password']);
		  $yqm = $_POST['yqm'];

		  $sql = "insert into login (`id`,`name`,`phone`,`address`,`sex`,`password`) values ('','{$name}','{$phone}','{$yqm}','{$password}')";

		  	$data = mysqli_query($con,$sql);
		  	if($data){
		  		echo "注册成功";
		  		$rand = "获取短信验证码";
	$phone = '';
	$name= '';
	$password = '';
		  	}else{
		  		echo "注册失败";
		  		$rand = "获取短信验证码";
	$phone = '';
	$name= '';
	$password = '';
		  	}

	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆注册</title>
<style>
*{margin:0;padding:0;}
body{font-size:14px;font-family:"Microsoft YaHei";background:#cccccc;}
ul,li{list-style:none;}

#tab{position:relative;}
#tab .tabList ul li{
	float:left;
	background:#fefefe;
	background:-moz-linear-gradient(top, #fefefe, #ededed);	
	background:-o-linear-gradient(left top,left bottom, from(#fefefe), to(#ededed));
	background:-webkit-gradient(linear,left top,left bottom, from(#fefefe), to(#ededed));
	border:1px solid #ccc;
	padding:7px 50px;
	width:101px;
	text-align:center;
	margin-left:-1px;
	position:relative;
	cursor:pointer;
}
#tab .tabCon{
	background-color: #ffffff;
	position:absolute;
	left:-1px;
	top:32px;
	border:1px solid #ccc;
	border-top:none;
	width:403px;
	height:400px;
}
#tab .tabCon div{
	padding:10px;
	width: 100%;
	position:absolute;
	opacity:1;
	filter:alpha(opacity=0);
}
#tab .tabList li.cur{
	border-bottom:none;
	background:#fff;
}
#tab .tabCon div.cur{
	opacity:1;
	filter:alpha(opacity=100);
}
.form h2{
	padding:10px;
}
</style>
</head>
<body>

<div id="tab" style="margin-left:30%;margin-top:10%">
  <div class="tabList">
	<ul>
		<li>登陆</li>
		<li>注册</li>
	</ul>
  </div>
  <div class="tabCon">
	<div>
		<!-- 登陆 -->
		<form method="post" action="">
			
		</form>
	</div>
	<div>
		<!---注册---->
		<form method="post" action="" class="form">
			<h2>手机号</h2><input type="text" name="phone" id="phone" value="<?php echo $phone ?>">
			<h2>用户名</h2><input type="text" name="name" id="name" value="<?php echo $name ?>">
			<h2>密码</h2><input type="password" name="password" id="password" value="<?php echo $password ?>">
			<h2>短信验证码</h2><input type="text" name="yzm" value=""><!-- <input type="submit" name="qcode" value="获取短信验证码"> -->
			<input  type="submit" name="qrcode" id="but" style="position: absolute;left: 47%;top: 65%;" value="<?php echo $rand ?>">
			<input type="text" name="yzmyz" value="<?php echo $rand ?>" style="display:none">
			<!-- <input type="text" name="qrcode" value="<?php echo $rand ?>"> -->
			<h2>邀请码(选填)</h2><input type="text" name="yqm"><br><br>

			<input type="submit" name="zc" value="注册" style="width: 30%;border-radius: 10%">
		</form>
			<!-- <form method="post" action="">
					<input  type="submit" name="qrcode" id="but" style="position: absolute;left: 47%;top: 65%;" value="<?php echo $rand ?>">
			</form> -->
		
	</div>
  </div>
</div>

<script>
window.onload = function() {
    var oDiv = document.getElementById("tab");
    var oLi = oDiv.getElementsByTagName("div")[0].getElementsByTagName("li");
    var aCon = oDiv.getElementsByTagName("div")[1].getElementsByTagName("div");
    var timer = null;
    for (var i = 0; i < oLi.length; i++) {
        oLi[i].index = i;
        oLi[i].onmouseover = function() {
            show(this.index);
        }
    }
    function show(a) {
        index = a;
        var alpha = 0;
        for (var j = 0; j < oLi.length; j++) {
            oLi[j].className = "";
            aCon[j].className = "";
            aCon[j].style.opacity = 0;
            aCon[j].style.filter = "alpha(opacity=0)";
        }
        oLi[index].className = "cur";
        clearInterval(timer);
        timer = setInterval(function() {
            alpha += 2;
            alpha > 100 && (alpha = 100);
            aCon[index].style.opacity = alpha / 100;
            aCon[index].style.filter = "alpha(opacity=" + alpha + ")";
            alpha == 100 && clearInterval(timer);
        },
        5)
    }
}


</script>
<!-- 代码 en -->

</body>
</html>
