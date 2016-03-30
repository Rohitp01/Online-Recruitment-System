<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1 align = 'center'>Online Recruitment System</h1>
	<h2 align ='right' style='margin-right:15px;margin-top:20px'><a href='logout.php'>Logout Here</a></h2>
	<h1 align = 'center' style='margin-top:20px'>Welcome Admin</h1>
	<center><h1>All user Information</h1></center>
	<table width = '800' align = 'center' border = '5'>
		<tr bgcolor='yellow'>
			<th>User ID</th>
			<th>User Name</th>
			<th>User Password</th>
			<th>User Email</th>
			<th>Delete User</th>
		</tr>

		<tr>
		<?php

			mysql_connect("localhost","root","");
			mysql_select_db("online_recruitment_system");

			$query = "select * from user";
			$run = mysql_query($query);
			while($row = mysql_fetch_array($run)){

				$user_id =$row[0];
				$user_name = $row[1];
				$user_password = $row[2];
				$user_email = $row[3];
			
		?>
			<td><?php echo $user_id; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $user_password; ?></td>
			<td><?php echo $user_email; ?></td>
			<td><a href = 'deleteuser.php?del=<?php echo $user_id; ?>'>Delete</a></td>
		</tr>
	<?php } ?>
	</table>
 
 </body>
</html>
