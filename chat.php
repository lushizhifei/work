<?php
	$nickname=$_GET["nickname"];
	$msg=$_GET["msg"];

	//保存到服务器的数据库中
	//2.使用文件模拟数据库功能
	$file=fopen("data.dat","r+");
	$str="";
	while (!feof($file)) {
		$str=$str.fgets($file);
	}
	echo $str;
	fclose($file);
	
	//fopen 打开文件  
	//a.读取文件
	// $file=fopen("data.dat","r");
	// while(!feof($file)){
	// 	echo fgets($file);
	// }
	// fclose($file);
	//b.写文件
	// $file=fopen("data.dat","r+");
	// fwrite($file, "hello world");

	// fclose($file);
	
	// $arr=array();
	// array_push($arr,1);
	// array_push($arr,2);
	// array_push($arr,3);
	// echo $arr[2];
	// $str="[2,5,6,7]";
	// $data=json_decode($str);
	// echo $data;
	// $str='{"status":1,"msg":"用户名或密码错误"}';
	// $obj=json_decode($str);
	// echo $obj->msg;
	// $str='{"nickname":"小妹","msg":"你好~~"}';
	// $arr=array();
	// array_push($arr,json_decode($str));

	// $str='{"nickname":"小帅","msg":"你也好啊~~"}';
	// array_push($arr,json_decode($str));
	// // echo json_encode($arr);
	// $file=fopen("data.dat","w");
	// fwrite($file,json_encode($arr));
	// fclose($file);
?>


