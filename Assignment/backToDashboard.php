<?php
	session_start();
	if($_SESSION['type']=="Admin")header("Location: adminDashboard.php");
	else
		header("Location: adminDashboard.php");
?>
