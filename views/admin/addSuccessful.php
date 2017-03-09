<?php 
	var_dump($_POST);
	$selectedNav = "admin";
	include '../../layout/head.php';
	include '../../layout/foot.php';
	//header('Refresh: 3; url=directory.php');
	echo $_FILES['addNew_empImage']['size'];
	/*echo $_FILES['addNew_empImage']['type'];
	echo $_FILES['addNew_empImage']['tmp_name'];
	echo $_FILES['addNew_empImage']['name'];*/
?>

<div style="text-align: center; margin-top: 15px;">
	<h2>Add Successful</h2>
	<span>You will automatically be redirected in 3 seconds.</span>
</div>