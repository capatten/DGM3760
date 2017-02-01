<?php
	//Load PHP variables
	//set variables
	$emailFirstName = $_POST['newsLetter_fName'];
	$emailLastName = $_POST['newsLetter_lName'];
	$emailAddress = $_POST['newsLetter_email'];
	
	/* settype to avoid SQL injection */
	settype($emailFirstName, ' varchar');
	settype($emailLastName, ' varchar');
	settype($emailAddress, ' varchar');
	
	
	//connect to the database
	$dbConnection = mysqli_connect('localhost','pattende_dgm3760','Pass1word','pattende_dgm3760') or die('Test');
	
	//escape variables
	$esc_emailFirstName = mysqli_real_escape_string($dbConnection, $emailFirstName);
	$esc_emailLastName = mysqli_real_escape_string($dbConnection, $emailLastName);
	$esc_emailAddress = mysqli_real_escape_string($dbConnection, $emailAddress);
	
	//build query
	$query =
	"INSERT INTO Assignment3(f_name, l_name, email_address)".
	"VALUES('$esc_emailFirstName','$esc_emailLastName','$esc_emailAddress')";
	
	//run Query
	$result = mysqli_query($dbConnection, $query) or die ('Query Failed');
	
	//close connection
	mysqli_close($dbConnection);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Thanks</title>
	</head>
	<body>
		<h1>Thanks for signing up</h1>
	</body>
</html>