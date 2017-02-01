<?php
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
	echo $row[f_name];
	echo $row[l_name];
	echo $row[email_address];
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