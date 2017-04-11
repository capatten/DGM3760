<?php
	require_once('../../variables.php');
	//connect to the database
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	$userName = trimRealEscape($dbConnection,trim($_POST['userName']));
	
	if( !empty($userName) ){
		$query = "Select * FROM assignment7 WHERE UserName = '$userName'";
		
		$alreadyExists = mysqli_query($dbConnection, $query) or die('Query Failed');
		
		if(mysqli_num_rows($alreadyExists) != 0){
			echo "false";
		}
	}
	
	mysqli_close($dbConnection);
?>