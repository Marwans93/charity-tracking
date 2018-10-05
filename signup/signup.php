<?php

	include '../connection/connection.php';
	
		$staffNumber = $_POST['staffNumber'];
		$password = $_POST['password'];
		$staffRole = $_POST['staffRole'];
		$staffName = $_POST['staffName'];
		$phoneNumber = $_POST['phoneNumber'];

		mysql_query("insert into t1user values('$staffNumber','$password','$staffRole')");
		
		if($staffRole == "2")
		{
			mysql_query("insert into t2employee values('$staffNumber','$staffName','$phoneNumber')");
		}
		elseif($staffRole == "1")
		{
			mysql_query("insert into t3manager values('$staffNumber','$staffName','$phoneNumber')");
		}
		
		header ("Location: ../index.php?status='ys'");

?>