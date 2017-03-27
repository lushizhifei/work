// <?php

	$username=$_GET["username"];
	$password=$_GET["password"];
	if($username=="xionger"&&$password=="5201314bm"){
		echo '{"status":1,"msg":"用户登录成功","user":{"username":"xionger","score":200,"level":"VIP3"}}';
	}else{
		echo '{"status":0,"msg":"用户登录失败","user":{}}';
	}
?>.