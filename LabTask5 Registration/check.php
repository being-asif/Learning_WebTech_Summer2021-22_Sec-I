<?php 
	session_start();



	$name = $_REQUEST['name'];
	$id = $_REQUEST['id'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	

	if ($name == null || $id == null || $email==null || $password ==null ) {
		echo "invalid type everythings<br>";
	}else{
		if($name == $password){
			$_SESSION['status'] = true;
			header('location: home.php');
		}else{
			echo "invalid user";
		}
	}



?> 
