<?php 
	session_start();
	
	if(!empty($_POST['idText'])&&!empty($_POST['passText']))
	{
		
		$id = $_POST['idText'];
		$pass = $_POST['passText'];
		

		$Information = simplexml_load_file("storage.xml");
		$isvalid=false;
		
		foreach ($Information as $user) 
		{
			echo $user->name."<br>";
			//var_dump($user);
			if(($id==trim($user['id']))&&(trim($user->password)==$pass))
			{
				$isvalid=true;
				$type = $validity[2];

				$_SESSION['id']=$id;
			    $_SESSION['pass']=$pass;
			    $_SESSION['type']=$type;
			    $_SESSION['name']=$validity[1];
				echo "true am here";
			}
		}

		
		if($isvalid)
		{
			echo 'accepted';
			
			if ($type=="Admin")
			{
				header('Location: adminDashboard.php');	
			}
			else
			{
				header('Location: userDashboard.php');
			}
			
		}
		else
		{
			echo "User name or password is incorrect";
		}
	
	}
	else
	{
		echo "Nothing insrted";
	}
	
 ?>