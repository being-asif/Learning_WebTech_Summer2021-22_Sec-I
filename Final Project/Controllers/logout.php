<?php 
	
	session_start();
	unset($_SESSION['status']);
	unset($_SESSION['user']);
	// setcookie('status', 'true', time()-10, '/');
	header('location: ../Index.php');

?>