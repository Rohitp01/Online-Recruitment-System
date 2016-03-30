<?php
	session_start();
	if(!isset($_SESSION['email'])){
		echo "<script>alert(failed)</script>";
		header("location: login.php");
	}
	else echo "<script>alert(Success)</script>";
?>
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
	<h2>London</h2>

		<p>London is the capital city of England. It is the most populous city in the United Kingdom,
			with a metropolitan area of over 13 million inhabitants.</p>
		<p>Standing on the River Thames, London has been a major settlement for two millennia,
		its history going back to its founding by the Romans, who named it Londinium.</p>
	</div>

	<div id="footer">
		Copyright© Rohit Patil
	</div>
</body>
</html>
<?php

	
?>