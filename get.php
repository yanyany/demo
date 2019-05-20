<?php
header("content-type:text/html;charset=utf-8");
//get 通过url直接传过来
//post 无法看到参数 比get安全
//$_GET 接受get传递过来的参数
//isset()判断是否又参数传过来
if(isset($_GET['name'])){ 

	if($_GET['name'] != '' && $_GET['password'] != ''){
	
		$name = $_GET['name'];
		$password = $_GET['password'];
		//.是连接符
		echo "您输入的名字是:".$name;
		echo "<br>";
		echo "你输入的密码是:".$password;		
	}else{
		echo "登陆失败";
	}
	

}

?>