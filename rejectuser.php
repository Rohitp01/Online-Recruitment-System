<?php

	mysql_connect("localhost","root","");
	mysql_select_db("online_recruitment_system");
	
	$delete_id = $_GET['del'];
	
	$query = "delete from applications where application_id ='$delete_id'";
	if(mysql_query($query)){
		echo "<script>window.open('updatestatus.php','_self')</script>";
	}
	else {
		echo "<script>alert('error');</script>";
	}
?>