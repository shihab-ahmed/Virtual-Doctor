<?php 
	
	$isValid = true;
	$id = $_POST['idText'];
	$pass = $_POST['passText'];
	$cpass = $_POST['confirmText'];
	$name = $_POST['nameText'];



	if(empty($id))
	{
		echo "id Not inserted<br>";
		$isValid = false;
	}
	if(empty($name))
	{
		echo "Name Not inserted<br>";
		$isValid = false;
	}
	else
	{
		if( ord($name[0])<65 || ord($name[0])>122)
		{
			echo "Name have to start with an alphabet <br>";
			$isValid = false;
		}
		
	}
	if(empty($pass))
	{
		echo "password is required <br>";
		$isValid = false;
	}
	if(empty($cpass))
	{
		echo "confirm password is required <br>";
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
	if (!isset($_POST['utype']))
	{
		echo "type not selected <br>";
		$isValid = false;
	}
	else
	{
		$type = $_POST['utype'];
	}
	if($isValid==true)
	{

		$person = simplexml_load_file("storage.xml");

		$i=0;
		foreach ($person as $user) 
		{
			$i++;
		}
		
		$person->addchild("user","");
		$person->user[$i]->addAttribute("id",$id);
		$person->user[$i]->addchild("name",$name);
		$person->user[$i]->addchild("type",$type);
		$person->user[$i]->addchild("password",$pass);
	
		$person->asXML("storage.xml");

		echo "Your account has been created";
	}
 ?>