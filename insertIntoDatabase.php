<?php
//Load PHP variables
//set variables
$emailFirstName = $_POST['emailFrm_FirstName'];
$emailLastName = $_POST['emailFrm_LastName'];
$emailAddress = $_POST['emailFrm_EmailAddress'];
$emailReason = $_POST['emailFrm_Reason'];
$emailAgreeToTerms_bool = $_POST['emailFrm_agreeToTerms'];

//connect to the database
$dbConnection = mysqli_connect('localhost','pattende_dgm3760','Pass1word','pattende_dgm3760') or die('Test');

//build query
$query = 
	"INSERT INTO Assignment2(f_name, l_name, email_address, email_reason, agreed_to_conditions)".
	"VALUES('$emailFirstName','$emailLastName','$emailAddress','$emailReason','$emailAgreeToTerms_bool')";

//run Query
$result = mysqli_query($dbConnection, $query) or die ('Query Failed');

//close connection
mysqli_close($dbConnection);
?>