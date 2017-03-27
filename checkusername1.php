<?php

	$username=$_GET["username"];
	if($username=="test"){
		echo '{"success":1,"morePin":["test222","test234","test550"]}';
	}else if($username=="xiao"){
		echo '{"success":1,"morePin":["xiaohua","xiaomi","xiao550"]}';
	}else{
		echo '{"success":0,"morePin":[]}';
	}
?>