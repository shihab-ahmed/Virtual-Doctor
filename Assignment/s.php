<?php
	$person = simplexml_load_file("storage.xml");
	
	$person->addchild("User","");
	$person->User->addchild("User2","asd");
	
	$person->asXML("storage.xml");
?>