<?php
	//set user name and password
	$username = 'admin';
	$password = 'Password';
	
	if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)){
		// THE USER NAME/PASSWORD IS INCORRECT SEND AUTH HEADERS
		header("HTTP/1.1 401 Unauthorized");
		header('WWW-Authenticate: Basic realm="directory"');
		exit('<div style="text-align: center; margin-top: 15px;"><h2>Unauthorized Access</h2><h4>You must enter a user name and password to view this page.</h4></div>');
	}
?>