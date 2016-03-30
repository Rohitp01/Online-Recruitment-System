<?php

	mysql_connect("localhost","root","");
	mysql_select_db("online_recruitment_system");
	
	$delete_id = $_GET['del'];
	
	$query = "delete from user where user_id ='$delete_id'";
	if(mysql_query($query)){
		echo "<script>window.open('welcomeAdmin.php','_self')</script>";
	}
	else {
		echo "Error";
	}
?>