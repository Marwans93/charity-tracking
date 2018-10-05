<?php
	
	$email = $_POST["email"];
	$password = $_POST["password"];

	include 'connection/config.php';

            $pengguna = "select * from pengguna where email = '$email' and  password = '$password'";
			$queue = mysql_query($pengguna) or die (mysql_error());
			$finder = mysql_num_rows($queue);
			
			if($finder == 0)
			{
			    $maklum = "x";
				header ("Location: login.php?status=$maklum");
			
			}
			else
			{
			  $array = mysqli_fetch_array($queue);
		      $jawatan = $array['position'];

			   session_start();
			   $_SESSION['name'] = $array['name'];
			   $_SESSION['email'] = $array['email'];
			   $_SESSION['position'] = $jawatan;
			   $_SESSION['register'] = 'login';

				if($jawatan =="admin")
				{
					header("Location: admin/index.php");
				}
				else if ($jawatan =="ngo")
				{
					header("Location: ngo/index.php");
				}
				else 
				{
					header("Location: user/index.php");
				}
			}
    
?>