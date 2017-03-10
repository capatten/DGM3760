<?php 
require_once('../variables.php');
	$selectedNav = "admin";
	include '../../layout/head.php';
	include '../../layout/foot.php';
	
	//connect to the database
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	//build query
	$query =
	"DELETE 
	FROM
		emp_directory
	WHERE
		1 = 1
		AND employee_id = '".$_POST['delete_empID']."';
	";
	
	//run Query
	mysqli_query($dbConnection, $query) or die ('Query Failed');
	
	//close connection
	mysqli_close($dbConnection);
	
	@unlink('../../assets/img/profile/'.$_POST['delete_img']);
	
	header('Refresh: 1; url=directory.php');
	
	echo '
		<div style="text-align: center; margin-top: 15px;">
			<h2>Delete Successful</h2>
			<span>You will automatically be redirected in 3 seconds.</span>
		</div>
	';
?>