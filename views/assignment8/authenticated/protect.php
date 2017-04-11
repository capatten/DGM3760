<?php
	if(!isset($_COOKIE['userName'])){
		echo '<p class="login">Please <a href="../index.php">log in</a> to access this page</p>';
		exit();
	}
?>