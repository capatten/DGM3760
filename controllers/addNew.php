<?php
	require_once('../views/variables.php');

	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	$FNAME = trimRealEscape($dbConnection,trim($_POST['f_name']));
	$LNAME = trimRealEscape($dbConnection,trim($_POST['l_name']));
	$EMAIL = trimRealEscape($dbConnection,trim($_POST['email']));
	$DPT = trimRealEscape($dbConnection,trim($_POST['department']));
	$STATUS = trimRealEscape($dbConnection,trim($_POST['status']));
	$TITLE = trimRealEscape($dbConnection,trim($_POST['title']));
	
	// get all departments listed in table
	$query = "
	 	CALL create_new_emp(
			'$FNAME'
			,'$LNAME'
			,'$EMAIL'
			,$DPT
			,$STATUS
			,$TITLE	
		);
	";
	
	$result = mysqli_query($dbConnection, $query) or die('Query Failed');
	
	mysqli_close($dbConnection);
	
	if($result == true){
		session_start();
		$_SESSION["fullName"] = $FNAME. ' ' .$LNAME;
		header( 'Location: /DGM3760/index.php' );
	}
?>