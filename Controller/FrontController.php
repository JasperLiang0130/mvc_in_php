<?php

	include("Controller.php");
	$controller = new Controller();
	//get all books
	//echo $_POST["action"].$_POST["key"] . $_POST["searchType"];
	if($_POST["action"]=="search"){
		$controller->searchBooks($_POST["key"] , $_POST["searchType"]);
	}else if($_POST["action"]=="display"){
		$controller->getAllBooks();	
	}else if($_POST["action"]=="valid"){
		$controller->validLogin($_POST["username"], $_POST["pwd"], $_POST["domain"]);
	}else if($_POST["action"] == "register"){
		$controller->register($_POST["username"],$_POST["name"],$_POST["age"],$_POST["address"],$_POST["password"],$_POST["repassword"],$_POST["email"],$_POST["domain"]);
	}else if($_GET["action"]=="logout"){
		$controller->logout();
	}
	//$controller->showUser("Jasper");
	 

?>