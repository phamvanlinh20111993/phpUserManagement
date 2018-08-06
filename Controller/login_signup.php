<?php
	
	//session_start();
	header("Location: ../View/login.php");

	if(isset($_POST['username']) && isset($_POST['password'])){
		
		header("Location: ../Controller/home.php");
	}
	
	
?>