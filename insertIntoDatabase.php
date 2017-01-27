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

/* settype to avoid SQL injection */
settype($emailFirstName, ' varchar');
settype($emailLastName, ' varchar');
settype($emailAddress, ' varchar');
settype($emailReason, ' varchar');
settype($emailAgreeToTerms_bool, ' integer');


//connect to the database
$dbConnection = mysqli_connect('localhost','pattende_dgm3760','Pass1word','pattende_dgm3760') or die('Test');

//escape variables
$esc_emailFirstName = mysqli_real_escape_string($dbConnection, $emailFirstName);
$esc_emailLastName = mysqli_real_escape_string($dbConnection, $emailLastName);
$esc_emailAddress = mysqli_real_escape_string($dbConnection, $emailAddress);
$esc_emailReason = mysqli_real_escape_string($dbConnection, $emailReason);

//build query
$query = 
	"INSERT INTO Assignment2(f_name, l_name, email_address, email_reason, agreed_to_conditions)".
	"VALUES('$esc_emailFirstName','$esc_emailLastName','$esc_emailAddress','$esc_emailReason','$emailAgreeToTerms_bool')";

//run Query
$result = mysqli_query($dbConnection, $query) or die ('Query Failed');

//close connection
mysqli_close($dbConnection);
?>

<html>
<head>
	<title>Thank you</title>
</head>
<body>
	<h2>Thank you <?php echo $emailFirstName . ' ' . $emailLastName;?>!</h2>	
	<p>We will be sending an email to you at <strong><?php echo $emailAddress;?></strong></p>
	<p>The subject of the email will say "<?php echo $emailReason;?>"</p>
</body>
</html>