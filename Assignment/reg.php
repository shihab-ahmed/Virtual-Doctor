<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="regRequest.php" method="post">
		<fieldset>
			<legend><h2>Registration</h2></legend>
			<table>
				<tbody>
					<tr>
						<td>
							ID
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="idText">
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="passText">
						</td>
					</tr>
					<tr>
						<td>
							ConfirmPassword
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="confirmText">
						</td>
					</tr>
					<tr>
						<td>
							Name
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="nameText">
						</td>
					</tr>
					<tr>
						<td>
							User Type
						</td>
					</tr>
					<tr>
						<td>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<input type="radio" name="utype" value="User">User
							<input type="radio" name="utype" value="Admin">Admin
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Sign Up"/>
							<a href="login.php">Sign In</a> 
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
	</form>	
</body>
</html>