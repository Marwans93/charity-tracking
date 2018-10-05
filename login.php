<?php

	if(isset($_GET['status']))
	{
		$status = $_GET['status'];
		
		if($status == "x")
		{
			$showStatus = "<font face='arial' size='3' color='red'>Invalid user!</font>";
		}
		elseif($status == "xp")
		{
			$showStatus = "<font face='arial' size='3' color='red'>Password not fill up!</font>";
		}
		elseif($status == "xsn")
		{
			$showStatus = "<font face='arial' size='3' color='red'>Email address not fill up!</font>";
		}
		elseif($status = "ys")
		{
			$showStatus = "<font face='arial' size='3' color='green'>Successfully sign up. Please login first.</font>";
		}
	}
	else
	{
		$showStatus = "&nbsp;";
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
	<!-- Main HTML -->
	
<body>
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
                        <li><a href="index.php">Home</a></li>
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
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Sign In</li>
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
					    <h2><span>Welcome To </span></h2>
						<h2><span>Charity Location Tracking Web Application </span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
<!-- ########################################## close header ########################################## -->
	<!-- Begin Page Content -->
		
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">   
            
                <form name="login" action="proses_log_masuk.php" method="post" class="contactForm">
           
			    <tr>
			    <center>
				<th colspan="2">LOGIN TO SYSTEM USING EMAIL ADDRESS</th>
				</center>
			    </tr><br>

			    <tr>
				<td colspan="2"><?php echo $showStatus;?></td>
			    </tr>

                <tr>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="name" placeholder="Your Email Address"/>
                        
                    </div>
                 </tr>
                 <tr>
                     <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Your Password"/>
                        
                    </div
                  </tr>
                  </tr>
                    <div class="text-center">
                    <input type="submit" name="login" value="LOGIN" class="btn btn-theme">
                    <a href="signup/register.php"><input type="button" name="signup" value="SIGN UP" class="btn btn-theme">
                    </div>
                </form>
			</div>
		</div>
	</div>
	</section>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>

<!-- ########################################## close body ########################################## -->	

<!-- ########################################## footer ########################################## -->	
<?php include ('bottom.php');?>
	
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
	
	
	
	
	
		
	