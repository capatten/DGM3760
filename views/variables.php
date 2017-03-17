<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', 'Pass1word');
	define('DB_NAME', 'dgm3760');
	
	function trimRealEscape($conn,$postVal) {
		return mysqli_real_escape_string($conn,trim($postVal));
	};
?>