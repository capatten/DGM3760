<?php
$sendSpam_Subject = $_POST['sendSpam_Subject'];
$sendSpam_Message = $_POST['sendSpam_Message'];

//connect to the database
$dbConnection = mysqli_connect('localhost','pattende_dgm3760','Pass1word','pattende_dgm3760') or die('Test');

//escape variables
$esc_emailFirstName = mysqli_real_escape_string($dbConnection, $emailFirstName);
$esc_emailLastName = mysqli_real_escape_string($dbConnection, $emailLastName);
$esc_emailAddress = mysqli_real_escape_string($dbConnection, $emailAddress);

//build query
$query =
"SELECT * FROM Assignment3";

//run Query
$result = mysqli_query($dbConnection, $query) or die ('Query Failed');

//close connection
mysqli_close($dbConnection);

//display result
while($row = mysqli_fetch_array($result)){
	$f_name = $row[f_name];
	$l_name =  $row[l_name];
	$email_address = $row[email_address];
	$email_to = $email_address;
	$email_subject = $sendSpam_Subject;
	
	//set content of email and header data
	$email_body = "Dear $f_name $l_name, \n\n$sendSpam_Message";
	
	//execute mail
	mail($email_to, $email_subject, $email_body, 'From:assignment3@example.com');
	
	echo 'Message sent to ' . $email_address .'<br>';
}
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