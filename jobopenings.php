<html>
<head>
	<title>Welcome</title>
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
		<p>Welcome Admin</p>
	</div>

	<div id="nav">
	<ul>
  		<li><a href="userdetails.php">View Users</a></li>
  		<li><a href="#home">Add Job Openings</a></li>
  		<li><a href="#contact">Update status</a></li>
  		<!-- <li><a href="#about">About</a></li> -->
	</ul>
	</div>

	<div id="logoutbutton">
		<button type="button" onclick="location.href='logout.php'">Logout Here</button> 
    </div>

    
    <div id="section">
		<center><h1>Job Openings</h1></center>
	
	<form method = 'post' action = 'jobopenings.php'>
		<table width='800' border = '5' align ='center'>
			<tr align = 'center'>
				<td>Company Name 	*</td>
				<td><input type = 'text' name = 'companyname'/></td>
			</tr>
			<tr align = 'center'>
				<td>Job Profile 	*</td>
				<td><input type = 'text' name = 'jobprofile'/></td>
			</tr>
			<tr align = 'center'>
				<td>Location 	*</td>
				<td><input type = 'text' name = 'location'/></td>
			</tr>
			<tr align = 'center'>
				<td>Vacancies 	*</td>
				<td><input type = 'text' name = 'vacancies'/></td>
			</tr>
			<tr align = 'center'>
				<td>Job Description 	*</td>
				<td><input type = 'text' name = 'description'/></td>
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
		$company_name = $_POST['companyname'];
		$job_profile = $_POST['jobprofile'];	
		$location = $_POST['location'];
		$vacancies = $_POST['vacancies'];
		$description = $_POST['description'];

		if($company_name == '' || $job_profile == '' || $location == '' || $vacancies == '' || $description == ''){
			echo "<script>alert('Please Fill all the Fields')</script>";
			exit();
		}
		$add_query = "insert into `job_offer`(`company_name`, `job_profile`, `location`, `vacancy`, `description`) VALUES ('$company_name','$job_profile','$location','$vacancies','$description')";


		if(mysql_query($add_query)){
			echo "<script>alert('successful insertion');</script>";
		}
		else echo "<script>alert('Registration Failed');</script>";
		
	}

	
	

?>