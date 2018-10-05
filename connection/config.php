<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'googlemap';
	
	mysqli_connect($dbhost,$dbuser,$dbpass) or die(mysqli_error());
	mysqli_select_db($dbname) or die(mysqli_error());

?>