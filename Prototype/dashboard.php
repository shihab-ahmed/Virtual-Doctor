<?php
	session_start();
	$name =$_SESSION['id'];
	if(isset($_SESSION['id']))
	{
		echo "alright";
	}
	else
	{
		header('Location: username.html');
	}
	var_dump($GLOBALS);
	session_destroy();
?>

<html>
	<head>
		<title>Dashboard</title>
	</head>
	
	<Body>
		
		<table border="1"    cellpadding="0" cellspacing="0"> 
			<tbody>
				<tr  >
					<td>
						<table>
							<tbody>
								<tr>
									 <td valign="top">
										<a href=""><?php echo $name; ?></a>
									</td>
								</tr>
								<tr>
									 <td valign="top">
										<input type="text" name="Searchbox">
									</td>
									 <td valign="top">
										<input type="submit" name="submit" value="Search">
									</td>
								</tr>
								<tr>
									 <td valign="top">
										<a href="">Contact</a>
									</td>
								</tr>

								<tr>
									<td colspan="2" valign="top">
										<hr>
									</td>
								</tr>

								<tr>
									<td colspan="2" valign="top">
										<input type="submit" name="submit" value="Email">
										<input type="submit" name="submit" value="Agent">
										<input type="submit" name="submit" value="Report">
									</td>
								</tr>

							</tbody>
						</table>
					</td>	


					<td>
						<table>
							<tbody>
								<tr>
									<td valign="top">
										Selected user name
									</td>
									<td valign="top"> 
										<input type="submit" name="submit" value="Video Call">
									</td>
									<td valign="top">
										<input type="submit" name="submit" value="Prescription">
									</td>
								</tr>
								<tr>
									
								</tr>	

								<tr>
									<td colspan="3" valign="top">
										<hr>
									</td>
								</tr>
								<tr>
									<td colspan="2" valign="top">
											<input type="text" name="Messagebox">
									</td>
									<td valign="top">
										<input type="submit" name="submit" value="submit">
									</td>
								</tr>
							</tbody>
						</table>
					</td>	

				</tr>
			</tbody>
		</table>			
	</body>
<html>