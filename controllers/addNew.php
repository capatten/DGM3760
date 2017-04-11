<?php
	require_once('../views/variables.php');

	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	//var_dump($_POST);
	
	// get all departments listed in table
	$query = "
	 	CALL create_new_emp(
				
		);
	";
	
	// $result_departments = mysqli_query($dbConnection, $query) or die('Query Failed');
?>