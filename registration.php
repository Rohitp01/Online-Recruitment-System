<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h1 align = 'center'>Online Recruitment System</h1>
	<form method = 'post' action = 'registration.php'>
		<table width='400' border = '5' align ='center'>
			
			<tr>
				<td colspan = '5' align = 'center'><h1>Registration</h1></td>
			</tr>
			
			<tr>
				<td>User name</td>
				<td><input type = 'text' name = 'username'/></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input type = 'password' name = 'pass'/></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type = 'text' name = 'email'/></td>
			</tr>
			
			<tr>
				<td colspan = '5' align = 'center'><input type = 'submit' name = 'submit_button' value = 'Sign up'/></td>
			</tr>
		
		</table>
	</form>
	<div align = 'center'>
		<b>Already Registered </b></br><a href = 'login.php'>Login Here</a>
	</div>
</body>
</html>
<?php

	mysql_connect("localhost","root","");
	mysql_select_db("online_recruitment_system");
	
	if(isset($_POST['submit_button']))
	{
		$user_name = $_POST['username'];
		$user_password = $_POST['pass'];
		$user_email = $_POST['email'];	

		if($user_name == ''){
			echo "<script>alert('Please Enter Username!')</script>";
			exit();
		}

		if($user_password == ''){
			echo "<script>alert('Please Enter Password!')</script>";
			exit();
		}

		if($user_email == ''){
			echo "<script>alert('Please Enter email address!')</script>";
			exit();
		}

		$check_email = "select * from user where email ='$user_email'";
		$run = mysql_query($check_email);
		if(mysql_num_rows($run)>0){
			echo "<script>alert('User with email already exists')</script>";
			exit();
		}
		else echo "<script>alert('success!!')</script>";
		

		$query = "insert into user (username, password, email) values ('$user_name' , '$user_password' , '$user_email')";

		if(mysql_query($query)){
			echo "<script>window.open('welcome.php', '_self')</script>";
		}
		else echo "<script>alert('Registration Failed')</script>";

	}

	
	

?>