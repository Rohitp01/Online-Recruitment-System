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
		<p>Welcome User</p>
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
		<center><h1>All Job Openings</h1></center>
	<table width = '800' align = 'center' border = '5'>
		<tr bgcolor='yellow'>
			<th>Company name</th>
			<th>Job Profile</th>
			<th>Location</th>
			<th>Vacancies</th>
			<th>Job Description</th>
			<th>Apply</th>
		</tr>

		<tr>
		<?php

			mysql_connect("localhost","root","");
			mysql_select_db("online_recruitment_system");

			$query = "select * from job_offer";
			$run = mysql_query($query);
			while($row = mysql_fetch_array($run)){

				$comapany_name =$row[1];
				$job_profile = $row[2];
				$location = $row[3];
				$vacancies = $row[4];
				$description = $row[5];
			
		?>
			<td><?php echo $comapany_name; ?></td>
			<td><?php echo $job_profile; ?></td>
			<td><?php echo $location; ?></td>
			<td><?php echo $vacancies; ?></td>
			<td><?php echo $description; ?></td>
			<td><a href = 'jobapplication.php?del=<?php echo $user_id; ?>'>Apply</a></td>
		</tr>
	<?php } ?>
	</table>
	</div>
	 
	<div id="footer">
		Copyright© Rohit Patil
	</div> 
 </body>
</html>
