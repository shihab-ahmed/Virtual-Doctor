<?php
 	session_start();
	$name=$_SESSION['name'];


	if(isset($_SESSION['id']))
	{
		
	}
	else
	{
		header('Location: username.html');
	}
	if(!$_SESSION['name']=="User") header("Location: login.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
</head>
<body>
	<fieldset>
		<form>
			<table>
				<tbody>
					<tr>
						<td>
							<h1>
								Welcome <?php echo $name; ?>
							</h1>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
					</tr>
					<tr>
						<td>
							<a href="profile.php">Profile</a> 
						</td>
					</tr>
					<tr>
						<td>
							<a href="reg.php">Change Password</a> 
						</td>
					</tr>
					<tr>
						<td>
							<a href="logout.php">Logout</a> 
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</fieldset>	
</body>
</html>