<?php

 	include '../signup/config.php';
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$ic= $_POST['ic'];
	$gender = $_POST['gender'];
	$fon = $_POST['fon'];
	$address = $_POST['address'];
	$position = $_POST['position'];


			mysql_query("insert into pengguna values ('$email','$password','$name','$position')") or die (mysql_error());
			
		
			mysql_query("insert into users values ('$email','$password','$name','$ic','$gender','$fon','$address')") or die (mysql_error());
			
			
			$maklum = $email." Successfully Registered! Log in here.";
			
			header("Location:../login.php?status=$maklum");
			
		
	{
		echo "Error!!";
	}
	?>