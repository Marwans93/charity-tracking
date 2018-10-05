<?php
	
	include '../connection/connection.php';
	
	
	//check staff number even it have been click or not
	if(isset($_REQUEST['staffNumber']))
	{	
		$checkStaffNumber = $_REQUEST['staffNumber'];
	}
	else
	{
		$signup = "";
	}

	//declaration of staffNumber avoid error in show status
	$staffNumber = "";
	
	//if staffNumber onClick it will be process here
	if(isset($checkStaffNumber))
	{
		if($checkStaffNumber == "")
		{
				$showStatus = "&nbsp;";
		}
		else
		{
			$checkT1user = mysql_query("select * from t1user where t1StaffNumber = '$checkStaffNumber'");
			$checkData = mysql_num_rows($checkT1user);
		
			if($checkData == 0)
			{	
				$staffNumber = $checkStaffNumber;
				$showStatus = "<font face='arial' size='3' color='green'>Staff number available to sign up!</font>";
			}
			else
			{	
				$staffNumber = "";
				$showStatus = "<font face='arial' size='3' color='red'>Staff number already sign up!</font>";
			}
		}
	}
	
	//show default status
	else
	{
		$showStatus = "&nbsp;";
	}
	
?>


<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Filing System</title>
	
	
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">

	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">

<script type="text/javascript">
 $(function() {
		/* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
		/* For cell text alignment */
		$("table td:first-child, table th:first-child").addClass("first");
		/* For removing the last border */
		$("table td:last-child, table th:last-child").addClass("last");
});
</script>

<style type="text/css">

	a {color:#666;}
	
	#content {width:65%; max-width:690px; margin:6% auto 0;}
	
	/*
	Pretty Table Styling
	CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
	*/
	
	table {
		overflow:hidden;
		border:1px solid #d3d3d3;
		background:#fefefe;
		width:50%;
		margin:5% auto 0;
		-moz-border-radius:5px; /* FF1+ */
		-webkit-border-radius:5px; /* Saf3-4 */
		border-radius:5px;
		-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
	}
	
	th, td {padding:8px 18px 8px; text-align:center; }
	
	th {padding-top:8px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
	
	td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
	
	tr.odd-row td {background:#f6f6f6;}
	
	td.first, th.first {text-align:left}
	
	td.last {border-right:none;}
	
	/*
	Background gradients are completely unnecessary but a neat effect.
	*/
	
	td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}
	
	tr.odd-row td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}
	
	th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
	}
	
	/*
	I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
	Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius
	
	And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
	*/
	
	tr:first-child th.first {
		-moz-border-radius-topleft:5px;
		-webkit-border-top-left-radius:5px; /* Saf3-4 */
	}
	
	tr:first-child th.last {
		-moz-border-radius-topright:5px;
		-webkit-border-top-right-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.first {
		-moz-border-radius-bottomleft:5px;
		-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.last {
		-moz-border-radius-bottomright:5px;
		-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
	}

</style>

</head>
<body>

<!-- ########################################## close header ########################################## -->
	
<div class="site-header">
	
		<div class="main-navigation"> <!-- main-navigation -->
			<div class="responsive_menu"> <!-- responsive_menu -->
				<ul>
                	

				</ul>
			</div> <!-- responsive_menu -->
			
			<div class="container"> <!-- container -->
				<div class="row"> <!-- row -->
				
					<div class="col-md-12 responsive-menu"> <!-- col-md-12 -->
						
					</div> <!-- /.col-md-12 -->
					
					<div class="col-md-12 main_menu"> <!-- col-md-12 -->
						
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->
        
		<!-- ########################################## title ##########################################-->
		
		<div class="container"> <!-- container -->
			<div class="row"> <!-- row -->
				<div class="col-md-12 text-center"> <!-- col-md-12 -->
					<a href="#" class="templatemo_logo"> <!-- logo -->
						<h1>Welcome to Filing System</h1>
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		
		<!-- ########################################## close title ##########################################-->
		
</div> <!-- /.site-header -->

<!-- ########################################## close header ########################################## -->
	
<!-- ########################################## body ########################################## -->

	
	<div id="menu-container">

		<div class="content homepage" id="menu-1">
		
           <div class="container">
				
				<div class="row">
					
					<div class="widget-content"> 
	 	
			
			
			<table>
			<tr>
				<th colspan="2">SIGN UP TO FILING SYSTEM USING STAFF NUMBER</th>
			</tr>
			<tr>
				<td colspan="2"><?php echo $showStatus;?></td>
			</tr>
			
			<form name="form" action="index.php" action="post">
			
			<tr>
				<td width="39%">Staff Number</td>
				<td width="60%">
					<input name="staffNumber" type="text" placeholder="Your Staff Number Here" size="35" value="<?php echo $staffNumber; ?>" >&nbsp;&nbsp;&nbsp;
					<input type="radio" onClick="this.form.submit();" >
				</td>
			</tr>
			
			</form>
			
			<form name="signup" action="signup.php" method="post">
				<input name="staffNumber" type="text" value="<?php echo $staffNumber;?>" hidden >
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Your Password Here" size="40"></td>
			</tr>
			<tr>
				<td width="39%">Staff Name</td>
				<td width="60%"><input name="staffName" type="text" placeholder="Your Staff Number Here" size="40"></td>
			</tr>
			<tr>
				<td width="39%">Phone Number</td>
				<td width="60%"><input name="phoneNumber" type="text" placeholder="Your Staff Number Here" size="40"></td>
			</tr>
			<tr>
				<td width="39%">Staff Role</td>
				<td width="60%"><input name="staffRole" type="radio" value="2">Employee &nbsp;&nbsp;&nbsp;&nbsp;
								<input name="staffRole" type="radio" value="1">Manager</td>
			</tr>
			<tr>
				<td colspan="2"><p align="left"><font face="arial" size="-2"><a href="../index.php">Back To Login</a></font></p></td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" name="signup" value="SIGN UP" >&nbsp;&nbsp;&nbsp;
					<input type="reset" name="reset" value="CLEAR" >
				</th>
			</tr>
			</table>
			
			</form> <!-- /.form singup-->
			
			
					</div>
							
				</div>
		
			</div>
			
		</div> <!-- /.menu-1 -->

	</div> <!-- /#menu-container -->

<!-- ########################################## close body ########################################## -->	

<!-- ########################################## footer ########################################## -->	
	
	<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright 2014; Dibina oleh Pelajar Latihan Industri UiTM Jun - Sept 2014 untuk Perbadanan Kemajuan Iktisad Negeri Kelantan</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->

<!-- ########################################## close footer ########################################## -->	

	<!-- Scripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/tabs.js"></script>
	<script src="js/jquery.lightbox.js"></script>
	<script src="js/templatemo_custom.js"></script>
</body>
</html>


<?php


	

?>

