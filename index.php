<?php
   header("Access-Control-Allow-Origin: *");
	$login = "cursor";
	$password = "education";

	if ($login == $_POST['login'] && $password == $_POST['password']) {
		echo("true");
	}
	else {
		echo("false");
	}
?>