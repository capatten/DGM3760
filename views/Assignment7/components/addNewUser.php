<?php
	require_once('../../variables.php');
	//connect to the database
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	$Fname = trimRealEscape($dbConnection,trim($_POST['newUser_Fname']));
	$Lname = trimRealEscape($dbConnection,trim($_POST['newUser_Lname']));
	$Uname = trimRealEscape($dbConnection,trim($_POST['newUser_Uname']));
	$Psswrd1 = trimRealEscape($dbConnection,trim($_POST['newUser_psswrd']));
	$Psswrd2 = trimRealEscape($dbConnection,trim($_POST['newUser_psswrd_cnfrm']));
	
	if( !empty($Fname) && !empty($Lname) && !empty($Uname) && !empty($Psswrd1) && !empty($Psswrd2) && ($Psswrd1 == $Psswrd2) ){
		$query = "Select * FROM assignment7 WHERE UserName = '$Uname'";
		
		$alreadyExists = mysqli_query($dbConnection, $query) or die('Query Failed');
		
		if(mysqli_num_rows($alreadyExists) == 0){
			$query = "
				INSERT INTO dgm3760.assignment7 (
					fname
					,lname
					,userName
					,psswrd
				)values(
					'$Fname'
					,'$Lname'
					,'$Uname'
					,SHA('$Psswrd1')
				)";
			
			mysqli_query($dbConnection, $query);
			
			setcookie('userName', $Uname, time() + (60*60*24*30), '/');
			setcookie('firstName', $Fname, time() + (60*60*24*30), '/');
			setcookie('lastName', $Lname, time() + (60*60*24*30), '/');
			
			header( 'Location: /DGM3760/views/assignment7/authenticated/dashboard.php' );
		}else{
			echo '<p class="error">User Name is already in use. <a href="../index.php">Click here to try again</a></p>';
		}
	}
	
	mysqli_close($dbConnection);
?>