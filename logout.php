<?php
session_start();
session_destroy();	
header("location: login.php");
?>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<h1 align = 'center'>Online Recruitment System</h1>
	<h1 align = 'center'>You Logged out!!</h1>
</body>
</html>
<?php

	
?>