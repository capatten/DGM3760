<?php 
	require_once('../variables.php');
	$selectedNav = "admin";
	include '../../layout/head.php';
	include '../../layout/foot.php';
	
	//create photo path and name
	$ext = pathinfo($_FILES['addNew_EmpImage']['name'], PATHINFO_EXTENSION);
	$randNum = rand(10000,1000000);
	$filename = '../../assets/img/profile/'.$randNum.'.'.$ext ;
	
	/*------------ VERIFY IMAGE -----------*/
	$validImg = true;
	$invalidError = "";
	//check for missing
	if($_FILES['addNew_EmpImage']['size'] == 0){
		$invalidError = $invalidError.'You did not select an image.<br/>';
		$validImg = false;
	}
	
	//check for too large
	if($_FILES['addNew_EmpImage']['size'] > 204800 ){
		$invalidError = $invalidError.'Your file was large then 200KB.<br/>';
		$validImg = false;
	}
	
	//check file type
	if ($_FILES['addNew_EmpImage']['type'] == 'image/gif' || $_FILES['addNew_EmpImage']['type'] == 'image/jpeg' || $_FILES['addNew_EmpImage']['type'] == 'image/pjpeg' || $_FILES['addNew_EmpImage']['type'] == 'image/png'){
		//validation passed
	}else{
		$invalidError = $invalidError.'Your file was the wrong format.<br/>';
		$validImg = false;
	}
	
	if($validImg){
		//upload file and insert into database
		$tmp_name = $_FILES['addNew_EmpImage']['tmp_name'];
		move_uploaded_file($tmp_name, $filename);
		@unlink($_FILES['addNew_EmpImage']['tmp_name']);
		
		//connect to the database
		$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
		
		$empName = mysqli_real_escape_string($dbConnection,$_POST['addNew_empName']);
		$empPhone = mysqli_real_escape_string($dbConnection,$_POST['addNew_empPhone']);
		$empEmail = mysqli_real_escape_string($dbConnection,$_POST['addNew_empEmail']);
		$empExpertise = mysqli_real_escape_string($dbConnection,$_POST['addNew_empExpertise']);
		$empSpecial = mysqli_real_escape_string($dbConnection,$_POST['addNew_specialization']);
		$empBio = mysqli_real_escape_string($dbConnection,$_POST['addNew_empBio']);
		
		//build query
		$query =
		"INSERT INTO emp_directory (
			employee_name,
			phone_number,
			email_address,
			area_of_expertise,
			area_of_specialization,
			bio_information,
			profile_img
		)VALUES(
			'".$empName."',
			'".$empPhone."',
			'".$empEmail."',
			'".$empExpertise."',
			'".$empSpecial."',
			'".$empBio."',
			'".$randNum.".".$ext."'
		);";
		//run Query
		mysqli_query($dbConnection, $query) or die ('Query Failed');
		header('Refresh: 1; url=directory.php');
		//close connection
		mysqli_close($dbConnection);
		echo '
			<div style="text-align: center; margin-top: 15px;">
				<h2>Add Successful</h2>
				<span>You will automatically be redirected in 3 seconds.</span>
			</div>		
		';
	}else{
		echo '
			<div style="text-align: center; margin-top: 15px;">
				<h2>Error</h2>
				<h4>'.$invalidError.'</h4>
				<a href="directory.php">Click here to try again</a>
			</div>
		';
	}
?>