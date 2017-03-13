<?php
	
	//var_dump($GLOBALS);
	$isValid= true;
	$fname  = $_POST['fname'];
	$lname  = $_POST['lname'];
	$uname  = $_POST['uname'];
	$bday   = $_POST['bday'];
	$bg     = $_POST['bg'];
	$email  = $_POST['email'];
	$pass   = $_POST['pass'];
	$cpass  = $_POST['confirmpass'];


	if(empty($fname))
	{
		echo "First Name Not inserted<br>";
		$isValid = false;
	}
	else
	{
		if( ord($fname[0])<65 || ord($fname[0])>122)
		{
			echo "First Name have to start with an alphabet <br>";
			$isValid = false;
		}
		
	}
	if(empty($lname))
	{
		echo "last Name Not inserted<br>";
			$isValid = false;		
	}
	else
	{
		if( ord($lname[0])<65 || ord($lname[0])>122)
		{
			echo "Last Name have to start with an alphabet <br>";
			$isValid = false;
		}
		
	}
	if(empty($uname))
	{
		echo "user Name Not inserted<br>";
			$isValid = false;
	}
	else
	{
		if( ord($uname[0])<65 || ord($uname[0])>122)
		{
			echo "User Name have to start with an alphabet <br>";
			$isValid = false;
		}
		
	}
	
	if(empty($bday))
	{
		echo "Birthdate Not inserted<br>";
		$isValid = false;
	}


	if(empty($email))
	{
		echo "email is required <br>";
		$isValid = false;
	}
	if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
	{
		echo "Not a valid email <br>";
		$isValid = false;
	}
	if(empty($pass))
	{
		echo "password is required <br>";
		$isValid = false;
	}
	if(empty($cpass))
	{
		echo "password is required <br>";
		$isValid = false;
	}
	if(!empty($pass)&&!empty($cpass))
	{
		
		if($pass!=$cpass)
		{
		
			echo "password and confirm password doesnt match <br>";
			$isValid = false;
		}
	}

	if (!isset($_POST['gender']))
	{
		echo "degree not selected <br>";
		$isValid = false;
	}
	else
	{
		$gender = $_POST['gender'];
	}

	if($isValid==true)
	{
		echo "Your account has been created";
		var_dump($GLOBALS);
		$file = fopen("storage.txt","a+");
		$Text_TO_Write=$uname." ".$pass."\n";
		fwrite($file, $Text_TO_Write);
		fclose ($file);
	}
	

 ?>