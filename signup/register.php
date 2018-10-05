<?php
	
	include '../signup/config.php';


	$select ="select * from users";
	$qSelect = mysql_query($select) or die(mysql_error());
		
	$status="";
	$semakEmail = "";
	$paparStatus = "&nbsp;";
			
	if(isset($_REQUEST['email']))
	{	
		$semakEmail= $_REQUEST['email'];
	}
	else
	{  $semakEmail=""; }
	
	if(!$semakEmail == "")
	{
		$pengguna2 = "select * from users where email = '$semakEmail'";
		$queuePengguna2 = mysql_query($pengguna2) or die(mysql_error());
		$dataPengguna2 = mysql_fetch_array($queuePengguna2);
		
		$numberRow2 = mysql_num_rows($queuePengguna2);

			if($numberRow2 == 0)
			{
				$status = "nsd";
			} 
			else
			{
				$status = "nstd";
			}
	}
	else
	{ $semakNoStaff = ""; }
	
	if(!$status == "")
	{
		if($status == "nsd")
		{
			$paparStatus = "<font face= 'Arial' color='green' size='2'>Email Accpeted</font>";
		}
		elseif($status == "nstd")
		{
			$paparStatus = "<font face= 'Arial' color='red' size='2'>Email had been registered</font>";
		}
		else
		{ $paparStatus = "&nbsp;";}
	}
	
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Charity Location Tracking</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span>C</span>harity</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Charity Helps <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Family</a></li>
                                <li><a href="">Education</a></li>
								<li><a href="">Art,Culture and Humanities</a></li>
								<li><a href="">Animal</a></li>
								<li><a href="">Community Development</a></li>
								<li><a href="">Enviroment</a></li>
								<li><a href="">Health</a></li>
								<li><a href="">Human and Civil Right</a></li>
								<li><a href="">Human Service</a></li>
								<li><a href="">International</a></li>
								<li><a href="">Religion</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
	</header>
		<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Register</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

<!-- ########################################## close header ########################################## -->
</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Register New Account</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
		<!-- ########################################## close title ##########################################-->

	<!-- ################################################################################################-->
 <!-- /.site-header -->

<!-- ########################################## close header ########################################## -->
	
<!-- ########################################## body ########################################## -->
<section id="content">
	<div class="container"> 
		<table align="center">
		<tr>
			<td colspan="2" align="center" ><?php echo $paparStatus; ?></td>
		</tr>
		<tr><form action="register.php" method="post">

			<td><label for="name">Email:</label></td>
			<td>
			    <div class="form-group">
                     <input type="text" id="input3" name="email"  class="form-control" id="name" placeholder="Click Enter For Check" value="<?php echo $semakEmail;?>" onKeyPress="this.form.submit(Enter)"/>
                     <div class="validation">
                </div>
            </td>
		</tr></form>
		
        
        <form action="proses_daftar.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <input name="email" value="<?php echo $semakEmail;?>" hidden>
        <tr>
			<td><label for="password">Password:</label></td>
			<td>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="name" placeholder="Your Password" required />
                        <div class="validation"></div>
                    </div>
            </td>
		</tr>
		<tr>			
			<td><label for="name">Name:</label></td>
			<td>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                        <div class="validation"></div>
                    </div>
            </td>
		</tr>
		<tr>
			<td><label for="name">Ic Number:</label></td>
			<td>
			       <div class="form-group">
			           <input type="text"  id="input3" name="ic" class="form-control" placeholder="Your Ic Number" required /></td>
			           <div class="validation"></div>
                    </div>
            </td>
		</tr>
			
		<tr>
			<td><label for="name">Gender:</label></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender"  value="Male"><label for="name">Male</label><input type="radio" name="gender" value="female"><label for="name">Female</label></td>   
		</tr>

		<tr>
			<td><label for="name">Telephone Number:</label></td>
			<td>
			      <div class="form-group">
			           <input type="text"  id="input3" name="fon" class="form-control" placeholder="Your telephone number" required/></td>
			           <div class="validation"></div>
                    </div>
            </td>
		</tr>

		<tr>
			<td><label for="name">Address:</label></td>
			<td>
			    <div class="form-group">
			         <textarea name="address" rows="5" cols="40" class="form-control" placeholder="Your address" required /></textarea></td>
			          <div class="validation"></div>
                    </div>
            </td>
		</tr>
		<tr>
			<td><label for="name">Position:</label></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="position" value="user" checked required /><label for="name">user</label></td>
		</tr>
		</table><br>
		<center>
		<div class="text-center">
		<input type="submit" name="daftar" class="btn btn-theme" value="Register">
		<input type="reset" class="btn btn-theme" name="reset" value="Reset">
		<br><br>
		</div>
		</center>
		
		</form>
	               </div>
							
				</div>
		
			</div>
			
		</div> <!-- /.menu-1 -->

	</div> <!-- /#menu-container -->
<!-- ########################################## close body ########################################## -->	
<!-- ########################################## footer ########################################## -->	
<?php include ('bottom.php');?>
	
<!-- ########################################## close footer ########################################## -->	
	<!-- End Page Content -->
<!-- ########################################## close footer ########################################## -->	
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
	
	
	
		
	