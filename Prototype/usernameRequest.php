<?php 
	session_start();
	
	if(!empty($_GET['user'])&&!empty($_GET['pass']))
	{
		$name = $_GET['user'];
		$pass = $_GET['pass'];
		$i=0;
		$file = fopen("storage.txt","r");
		$isvalid=false;
		while(!feof($file))
		{
			$uarr[$i] =fgets($file);
			$i++;
		}
		for($j=0;$j<count($uarr);$j++)
		{
			$validity =(explode(" ",$uarr[$j]));
			if(($name==trim($validity[0]))&&(trim($validity[1])==$pass))
			{
				$isvalid=true;
				echo "true am here";
			}
		}
		if($isvalid)
		{
			echo 'accepted';
			$_SESSION['id']=$name;
			$_SESSION['pass']=$pass;
			header('Location: dashboard');
		}
		else
		{
			echo "User name or password is incorrect";
		}
		fclose ($file);
	}
	else
	{
		echo "Nothing insrted";
	}
	
 ?>