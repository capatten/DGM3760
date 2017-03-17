<?php
	setcookie('userName', '', time() - (3600), '/');
	setcookie('firstName', '', time() - (3600), '/', '/');
	setcookie('lastName',  '', time() - (3600), '/', '/');
	
	header( 'Location: /DGM3760/views/assignment7/index.php' );
?>