<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="loginRequest.php" method="post">
		<fieldset>
			<legend><h1>Login</h1></legend>
			<table>
				<tbody>
					<tr>
						<td>
							User Id
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
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Login"/>
							<a href="reg.php">Register</a> 
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
	</form>
</body>
</html>