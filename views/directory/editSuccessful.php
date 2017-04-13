<?php 
	require_once('../variables.php');
	$selectedNav = "admin";
	include '../../layout/head.php';
	include '../../layout/foot.php';
	//header('Refresh: 3; url=directory.php');
	/*var_dump($_POST);
	
	if(!is_uploaded_file($_FILES['edit_empImage']['tmp_name'])){
		echo "NOT EMPTY";
	}else{
		echo "EMPTY";
	}
	var_dump($_FILES);*/
	
	/*if(is_uploaded_file($_FILES['edit_empImage']['tmp_name'])){
		/*------------ VERIFY IMAGE -----------*/
		/*$validImg = true;
		$invalidError = "";
		//check for missing
		if($_FILES['edit_empImage']['size'] == 0){
			$invalidError = $invalidError.'You did not select an image.<br/>';
			$validImg = false;
		}
		
		//check for too large
		if($_FILES['edit_empImage']['size'] > 204800 ){
			$invalidError = $invalidError.'Your file was large then 200KB.<br/>';
			$validImg = false;
		}
		
		//check file type
		if ($_FILES['edit_empImage']['type'] == 'image/gif' || $_FILES['edit_empImage']['type'] == 'image/jpeg' || $_FILES['edit_empImage']['type'] == 'image/pjpeg' || $_FILES['edit_empImage']['type'] == 'image/png'){
			//validation passed
		}else{
			$invalidError = $invalidError.'Your file was the wrong format.<br/>';
			$validImg = false;
		}
		
		if($validImg){
			echo '../../assets/img/profile/'.$_POST['profile_img'];
			@unlink('../../assets/img/profile/'.$_POST['profile_img']);
			$profile_img = $_POST['profile_img'];
			$ext = pathinfo($_FILES['edit_empImage']['name'], PATHINFO_EXTENSION);
			$filename = '../../assets/img/profile/'.substr($profile_img, 0, -4).'.'.$ext;
			
			echo $filename;
		
			//upload file and insert into database
			$tmp_name = $_FILES['edit_empImage']['tmp_name'];
			move_uploaded_file($tmp_name, $filename);
			@unlink($_FILES['edit_empImage']['tmp_name']);
			
			//connect to the database
			$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
			
			//build query
			$query =
			"UPDATE emp_directory
				set profile_img ='".substr($profile_img, 0, -4).".".$ext."'
			WHERE
				1 = 1
				AND employee_id = '".$_POST['edit_empID']."';
			";
			
			//run Query
			mysqli_query($dbConnection, $query) or die ('Update Failed');
			
			//close connection
			mysqli_close($dbConnection);
			
		}else{
			echo '
				<div style="text-align: center; margin-top: 15px;">
					<h2>Error</h2>
					<h4>'.$invalidError.'</h4>
					<a href="directory.php">Click here to try again</a>
				</div>
			';
		}
	}*/
		
	//connect to the database
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	$empName = mysqli_real_escape_string($dbConnection,$_POST['edit_empName']);
	$empPhone = mysqli_real_escape_string($dbConnection,$_POST['edit_empPhone']);
	$empEmail = mysqli_real_escape_string($dbConnection,$_POST['edit_empEmail']);
	$empExpertise = mysqli_real_escape_string($dbConnection,$_POST['edit_empExpertise']);
	$empSpecial = mysqli_real_escape_string($dbConnection,$_POST['edit_specialization']);
	$empBio = mysqli_real_escape_string($dbConnection,$_POST['edit_empBio']);
	
	//build query
	$query =
	"UPDATE emp_directory 
		set employee_name = '".$empName."'
		,phone_number = '".$empPhone."'
		,email_address = '".$empEmail."'
		,area_of_expertise = '".$empExpertise."'
		,area_of_specialization = '".$empSpecial."'
		,bio_information = '".$empBio."'
	WHERE 
		1 = 1
		AND employee_id = '".$_POST['edit_empID']."';
	";
	
	//run Query
	mysqli_query($dbConnection, $query) or die ('Query Failed');
	header('Refresh: 1; url=directory.php');

	//close connection
	mysqli_close($dbConnection);
	
	echo '
		<div style="text-align: center; margin-top: 15px;">
			<h2>Edit Successful</h2>
			<span>You will automatically be redirected in 3 seconds.</span>
		</div>
	';
?>