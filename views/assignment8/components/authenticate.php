<?php
	require_once('../../variables.php');
	//connect to the database
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	$userName = trimRealEscape($dbConnection,trim($_POST['login_Uname']));
	$psswrd = trimRealEscape($dbConnection,trim($_POST['login_psswrd']));
	
	if( !empty($userName) ){
		$query = "Select * FROM assignment7 WHERE UserName = '$userName' AND psswrd = SHA('$psswrd')" ;
	
		$alreadyExists = mysqli_query($dbConnection, $query) or die('Query Failed');
		
		if(!empty($_POST['reqType']) && $_POST['reqType'] == 'ajax'){
			if(mysqli_num_rows($alreadyExists) != 0){
				echo "true";
			}else{
				echo "false";
			}
		}else{
			if(mysqli_num_rows($alreadyExists) != 0){
				
				while($row = mysqli_fetch_array($alreadyExists)){
					$Uname = $row['userName'];
					$Fname = $row['fname'];
					$Lname = $row['lname'];
				};
				
				setcookie('userName', $Uname, time() + (60*60*24*30), '/');
				setcookie('firstName', $Fname, time() + (60*60*24*30), '/');
				setcookie('lastName', $Lname, time() + (60*60*24*30), '/');
	
				header( 'Location: /DGM3760/views/assignment7/authenticated/dashboard.php' );
			}
		}
	}
	
	mysqli_close($dbConnection);
?>