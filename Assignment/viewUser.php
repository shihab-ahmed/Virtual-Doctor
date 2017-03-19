<?php
	session_start();
	$file = fopen("storage.txt","r");
		$isvalid=false;
		$i=0;
		while(!feof($file))
		{
			$uarr[$i] =fgets($file);

			$i++;
		}
	    echo count($uarr);
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
						<td colspan="3">
							User
						<td>

					</tr>

					<tr>
						<td>
							ID
						</td>
						<td>
							Name
						</td>
						<td>
							User Type
						</td>
					</tr>
						<?php for($j=0;$j<count($uarr);$j++) 
						 { $validity =(explode(" ",$uarr[$j]));?>
							
							<tr>
							<td>
								<?php echo $validity[0]; ?>
							</td>
							
							<td>
								<?php echo $validity[1]; ?>
							</td>

							<td>
								<?php echo $validity[2]; ?>
							</td>

							</tr>
						<?php } ?>
					

					<tr>
						<td colspan="3">
							<a href="backToDashboard.php">Go back</a> 
						<td>
					</tr>


				</tbody>
			</table>
		</form>
		
</body>
</html>