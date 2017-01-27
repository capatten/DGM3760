<?php
//Load PHP variables
//set variables
$emailFirstName = $_POST['emailFrm_FirstName'];
$emailLastName = $_POST['emailFrm_LastName'];
$emailAddress = $_POST['emailFrm_EmailAddress'];
$emailReason = $_POST['emailFrm_Reason'];
if(isset($_POST['emailFrm_agreeToTerms'])){
	$emailAgreeToTerms_bool = '1';
}else{
	$emailAgreeToTerms_bool = '0';
}


//connect to the database
$dbConnection = mysqli_connect('localhost','pattende_dgm3760','Pass1word','pattende_dgm3760') or die('Test');

//build query
$query = 
	"INSERT INTO Assignment2(f_name, l_name, email_address, email_reason, agreed_to_conditions)".
	"VALUES('$emailFirstName','$emailLastName','$emailAddress','$emailReason','$emailAgreeToTerms_bool')";

//run Query
//$result = mysqli_query($dbConnection, $query) or die ('Query Failed');

//close connection
mysqli_close($dbConnection);
?>

<html>
<head>
	<title>Thank you</title>
</head>
<body>
	<h2>Thank you <?php echo $emailFirstName. $emailLastName; ?>!</h2>
	<p>Your email has been sent. We will be contacting you shortly!</p>
</body>
</html>