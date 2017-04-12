<?php
	require_once('../variables.php');
	include '../../layout/head.php';
	include '../../layout/foot.php';
	session_start();
?>

<style>
	div#addedAlert {
		position: absolute;
		top: -100px;
		text-align: center;
		left: 0px;
		width: 100%;
	}
</style>

<div class="container">
	<?php 
		if(!empty($_SESSION['fullName'])){
			echo '<div id="addedAlert" class="alert alert-success" role="alert" style="position: absolute; top: -100px;"><span style="font-weight: bold;">'. $_SESSION['fullName'] .'</span> added successfully!</div>';
			unset($_SESSION['fullName']);
		}
	?>
	<h1>Employee List</h1>
</div>

<script>
	$(document).ready(function(){
		setTimeout(function(){
			  $("#addedAlert").animate({top: "0px"});
		}, 500);

		setTimeout(function(){
			  $("#addedAlert").animate({top: "-100px"});
		}, 2000);
	});
</script>