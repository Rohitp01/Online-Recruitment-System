<html>
<head>
	<title>Job Application</title>
<style>
	#header {
	    background-color:black;
	    color:white;
	    text-align:center;
	    padding:5px;
	}
	#nav {
	    line-height:30px;
	    background-color:#eeeeee;
	    height:800px;
	    width:200px;
	    float:left;
	    padding:5px;	      
	}
	#section {
	    width:1000px;
	    float:left;
	    padding:10px;	 	 
	}
	#footer {
	    background-color:black;
	    color:white;
	    clear:both;
	    text-align:center;
	   padding:5px;	 	 
	}
	#logoutbutton{
		float: right;
	}

	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>
	<div id="header">
		<h1>Online Recruitment System</h1>
		<p>Welcome user</p>
	</div>

	<div id="nav">
	<ul>
  		<li><a href="userviewjobs.php">See Job Openings</a></li>
			<li><a href="#news">Check Status</a></li>
			<li><a href="#contact">Update Profile</a></li>
			<!-- <li><a href="#about">About</a></li> -->
	</ul>
	</div>

	<div id="logoutbutton">
		<button type="button" onclick="location.href='logout.php'">Logout Here</button> 
    </div>
    
    <div id="section">
		<center><h1>Job Application</h1></center>
	
	<form method = 'post' action = 'jobapplicationform.php'>
		
		<table width='800' border = '5' align ='center'>
			<tr align = 'center'>
				<td>Name	*</td>
				<td><input type = 'text' name = 'name'/></td>
			</tr>
			<tr align = 'center'>
				<td>Age	*</td>
				<td><input type = 'text' name = 'age'/></td>
			</tr>
			<tr align = 'center'>
				<td>Qualification	*</td>
				<td><input type = 'text' name = 'qualification'/></td>
			</tr>
			<tr align = 'center'>
				<td>Work Experience	*</td>
				<td><input type = 'text' name = 'workexperience'/></td>
			</tr>
			<tr align = 'center'>
				<td>Email	*</td>
				<td><input type = 'text' name = 'email'/></td>
			</tr>
			<tr align = 'center'>
				<td>Resume	*</td>
				<td><input type = 'text' name = 'resume'/></td>
			</tr>
			<tr>
				<td colspan = '5' align = 'center'><input type = 'submit' name = 'submit_button' value = 'Submit'/></td>
			</tr>
		
		</table>
	</form>
	
	</div>
	 
	<div id="footer">
		Copyright© Rohit Patil
	</div> 
 </body>
</html>

<?php

	mysql_connect("localhost","root","");
	mysql_select_db("online_recruitment_system");
	
	
		
	if(isset($_POST['submit_button']))
	{
		$job_id = $_GET['jobid'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$qualification = $_POST['qualification'];
		$work_experience = $_POST['workexperience'];
		$email = $_POST['email'];

		$query = "insert into applications (job_id, name, age, qualification, workexperience, email) 
		values ( '$job_id', '$name', '$age', '$qualification', '$work_experience', '$email')";	

		if(mysql_query($query)){
			echo "<script>alert('successful insertion');</script>";
		}
		else echo "<script>alert('failure');</script>";
		
	}

	
	

?>