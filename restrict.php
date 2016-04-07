<?php

//We need functions for dealing with session
require_once("functions.php");

//Restriction-  logged in
	if(isset($_SESSION["user_id"])){
		//redirect not logged in user to login page
		header("Location: restrict.php");

	}
//?Logout is in the url
if(isset($_GET["logout"])){
  //delete the session
  session_destroy();

header("Location: login.php");

}

 ?>

<a href="?logout=1" >Log out</a>
