<html>
<head>
	<title> Admin Login Form</title>
</head>
<body>
	<h1 align = 'center'>Online Recruitment System</h1>
	<form method = 'post' action = 'admin_login.php'>
		<table width='400' border = '5' align ='center'>
			
			<tr>
				<td colspan = '5' align = 'center'><h1>Admin Login</h1></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type = 'text' name = 'admin_name'/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type = 'password' name = 'admin_pass'/></td>
			</tr>
			<tr>
				<td colspan = '5' align = 'center'><input type = 'submit' name = 'login_button' value = 'Login'/></td>
			</tr>
		
		</table>
	</form>
</body>
</html>

<?php

	mysql_connect("localhost","root","");
	mysql_select_db("online_recruitment_system");
	
	if(isset($_POST['login_button']))
	{
		$admin_password = $_POST['admin_pass'];
		$adminName = $_POST['admin_name'];	

		if($adminName == ''){
			echo "<script>alert('Please Enter Admin Name!')</script>";
			exit();
		}
		
		if($admin_password == ''){
			echo "<script>alert('Please Enter Password!')</script>";
			exit();
		}


		$check_user = "select * from admin where name ='$adminName' AND password = '$admin_password'";
		$run = mysql_query($check_user);

		if(mysql_num_rows($run)>0){
			
			echo "<script>window.open('welcomeAdmin.php','_self')</script>";
		}
		else echo "<script>alert('Name or password is Wrong')</script>";
		
	}

	
	

?>