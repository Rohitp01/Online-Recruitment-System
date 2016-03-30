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
  		<li><a href="jobopenings.php">Add Job Openings</a></li>
  		<li><a href="updatestatus.php">Update status</a></li>
  		<!-- <li><a href="#about">About</a></li> -->
	</ul>
	</div>

	<div id="logoutbutton">
		<button type="button" onclick="location.href='logout.php'">Logout Here</button> 
    </div>

    <div id="section">
		<center><h1>Job Applications</h1></center>
	<table width = '800' align = 'center' border = '5'>
		<tr bgcolor='yellow'>
			<th>Application id</th>
			<th>Job id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Qualification</th>
			<th>Reject</th>
			<th>Accept</th>
		</tr>

		<tr>
		<?php

			mysql_connect("localhost","root","");
			mysql_select_db("online_recruitment_system");

			$query = "select * from applications";
			$run = mysql_query($query);
			while($row = mysql_fetch_array($run)){

				$application_id =$row[0];
				$job_id = $row[1];
				$user_name = $row[2];
				$user_age = $row[3];
				$user_qualification = $row[4];
		?>
			<td><?php echo $application_id; ?></td>
			<td><?php echo $job_id; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $user_age; ?></td>
			<td><?php echo $user_qualification; ?></td>
			<td><a href = 'rejectuser.php?del=<?php echo $application_id; ?>'>Reject</a></td>
			<td><a href = 'acceptuser.php?acc=<?php echo $application_id; ?>'>Accept</a></td>
		</tr>
	<?php } ?>
	</table>
	</div>
	 
	<div id="footer">
		Copyright© Rohit Patil
	</div> 
 </body>
</html>
