<?php
	require_once('../variables.php');
	include '../../layout/head.php';
	include '../../layout/foot.php';
	
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	// get all departments listed in table
	$query = "
		SELECT
			department_id
			,department_desc
		FROM
			llpa.ref_emp_department";
	
	$result_departments = mysqli_query($dbConnection, $query) or die('Query Failed');
	
	// get all titles listed in table
	$query = "
		SELECT
			title_id
			,title_desc
		FROM
			llpa.ref_title";
	
	$result_titles = mysqli_query($dbConnection, $query) or die('Query Failed');
	
	// get all titles listed in table
	$query = "
		SELECT
			status_id
			,status_desc
		FROM
			llpa.ref_status";
	
	$result_status = mysqli_query($dbConnection, $query) or die('Query Failed');
?>

<div class="container">

</div>

<script>

</script>
