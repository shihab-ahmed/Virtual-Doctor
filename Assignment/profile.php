<?php
	session_start();
	$id=$_SESSION['id'];
	$pass=$_SESSION['pass'];
	$type=$_SESSION['type'];
	$name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	
		<form>
			<table border="1" cellpadding="4" cellspacing="0">
				<tbody>
					<tr>
						<td colspan="2">
							Profile
						</td>
					</tr>
					<tr>
						<td>
							ID
						</td>
						<td>
							<?php echo $id; ?>
						</td>
					</tr>
					<tr>
						<td>
							Name
						</td>
						<td>
							<?php echo $name; ?>
						</td>
					</tr>
					<tr>
						<td>
							Type
						</td>
						<td>
							<?php echo $type; ?>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<a href="backToDashboard.php">Go back</a> 
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		
</body>
</html>