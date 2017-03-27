<?php
	$username=$_GET["username"];
	if($username=="test"){
		echo '{"success":1,"morePin":["test1","test2","test3"]}';
	}else if($username=="xiao"){
		echo '{"success":1,"morePin":["xiao1","xiao2","xiao3"]}';
	}else{
		echo '{"success":0,"morePin":[]}';
	}
?>