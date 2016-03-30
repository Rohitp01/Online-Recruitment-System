<?php

	mysql_connect("localhost","root","");
	mysql_select_db("online_recruitment_system");
	
	$accepted_id = $_GET['acc'];
	
	$query = "select job_id from applications where application_id = '$accepted_id'";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	$job_id = $row[0];
	echo $job_id;
			
	$query2 = "insert into selected_users (application_id, job_id) values ('$accepted_id' , '$job_id')";
	if(mysql_query($query2)){
		//echo "<script>echo(sucess);</script>";
		echo "<script>window.open('updatestatus.php','_self')</script>";
	}
	else {
		echo "<script>alert('error');</script>";
	}
?>