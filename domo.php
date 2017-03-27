<?php
	header("content-Type:text/html;charset=utf-8")
	/* 获取POST请求的查询字符串参数内容 */
	// 用户名
	$uname = $_POST["username"];
	// 密码
	$upwd = $_POST["password"];

	// 数据处理
	if ($uname == "xiaoming" && $upwd == "abcdefg") {
		// echo "用户登录成功，页面跳转";
		echo '{"status":200, "msg":"用户登录成功", "user":{"username":"xiaoming", "address":"成都", "phone":"13100998877"}}';
	} else {
		// echo "用户名或密码错误，请重新输入...";
		echo '{"status":100, "msg":"用户名或密码错误", "user":{}}';
	}
?>
