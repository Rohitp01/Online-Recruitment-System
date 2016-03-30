<?php
	//session_start();
?>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h1 align = 'center'>Online Recruitment System</h1>
	<form method = 'post' action = 'login.php'>
		<table width='400' border = '5' align ='center'>
			
			<tr>
				<td colspan = '5' align = 'center'><h1>User Login</h1></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type = 'text' name = 'email'/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type = 'password' name = 'pass'/></td>
			</tr>
			<tr>
				<td colspan = '5' align = 'center'><input type = 'submit' name = 'login_button' value = 'Login'/></td>
			</tr>
		
		</table>
	</form>
	<div align = 'center'>
		<b>Not Yet Registered? </b></br><a href = 'registration.php'>Register Here</a>
	</div>
	<div align = 'center'>
		<b>Login as Admin? </b></br><a href = 'admin_login.php'>Admin Login Here</a>
	</div>
</body>
</html>

<?php

	mysql_connect("localhost","root","");
	mysql_select_db("online_recruitment_system");
	
	if(isset($_POST['login_button']))
	{
		$user_password = $_POST['pass'];
		$user_email = $_POST['email'];	

		if($user_email == ''){
			echo "<script>alert('Please Enter email address!')</script>";
			exit();
		}
		
		if($user_password == ''){
			echo "<script>alert('Please Enter Password!')</script>";
			exit();
		}


		$check_user = "select * from user where email ='$user_email' AND password = '$user_password'";
		$run = mysql_query($check_user);

		if(mysql_num_rows($run)>0){
			//$_SESSION['email'] = $email;
			echo "<script>window.open('welcome.php','_self')</script>";
		}
		else echo "<script>alert('Email or password is Wrong')</script>";
		
	}

	
	

?>