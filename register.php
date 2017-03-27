<?php
	/* 获取GET请求的查询字符串参数内容 
	// 用户名
	$uname = $_GET["username"];
	// 密码
	$upwd = $_GET["password"];
	// 地址
	$addr = $_GET["address"];
	// 电话
	$phon = $_GET["phone"];

	echo "你输入的用户名：$uname ，密码：$upwd ，地址：$addr ，电话：$phon";*/

	/* 获取POST请求的查询字符串参数内容 */
	// 用户名
	$uname = $_POST["username"];
	// 密码
	$upwd = $_POST["password"];
	// 地址
	$addr = $_POST["address"];
	// 电话
	$phon = $_POST["phone"];

	// 数据处理
	// 向数据库保存用户信息
	// .............

	echo "你输入的用户名：$uname ，密码：$upwd ，地址：$addr ，电话：$phon"; 
?>