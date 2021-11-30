<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!-- Here is where your page title must go -->
	<title>ChatRoom - Powered by Issac Meximas</title>
	
	<link rel="shortcut icon" HREF="images/favicon.ico" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	<!-- JQUERY -->
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<!-- -END- JQUERY -->
	
	<!-- Superfish Menu -->
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12,   // minimum width of sub-menus in em units 
				maxWidth:    27,   // maximum width of sub-menus in em units 
				extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
								   // due to slight rounding differences and font-family 
			}).superfish();  // call supersubs first, then superfish, so that subs are 
							 // not display:none when measuring. Call before initialising 
							 // containing tabs for same reason. 
		}); 
	</script>
	<!-- -END- Superfish Menu -->
	
	<!-- Javascript for the AJAX Contact Form  -->
	<script type="text/javascript" SRC="js/jsform/jquery.form.js"></script>
	<!-- -END- Javascript for the AJAX Contact Form  -->
	
	<!-- IE6 PNG Transparency Fix -->
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	<!-- -END- IE6 PNG Transparency Fix -->
	
	<!-- CUFON Font Replacement -->
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	<!-- -END- CUFON Font Replacement -->
	
</head>
<body>
	<div id="header">
		<div class="container_12">
			<div class="grid_3">
				<h1 class="logo">
				<a HREF="index.php">ChatRoom</a>
				</h1>
			</div><!-- end grid -->
			<div class="grid_9">
				<ul class="sf-menu">
					<li>
						<a HREF="index.php">Home</a>
					</li>
					<li>
						<a href="login.php">LogIn</a>					</li>
					<li>
						<a HREF="register.php">Register</a>
					</li>
					<li><a class="current" HREF="contact.php">Contact</a></li>
					
				</ul><!-- end sf-menu -->
			</div><!-- end grid -->
		</div><!-- end container -->
		<div class="clear"></div>
	</div><!-- end header -->
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a HREF="index.php">Home</a> » Contact</p>
			</div><!-- end grid -->
			
			<!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_8">
				<h2>Contact</h2>
				<p> Having Problems?? Contact Us here! </p>
				<p align="justify">All information submitted in this form is confidential and will be used only by<strong> ChatRoom </strong>. This information will not be shared or sold to any third party for any purposes whatsoever without specific permission from the submitter.</p>
				
				<br />
<?php

if(isset($_POST['send'])){
$email = "sahilsainis921@gmail.com";
$subject = $_POST['subject'];
$content = $_POST['content'];

$from = $_POST['name'];
$headers = "From:" . $from;
mail($email,$subject,$content,$headers);

echo "<meta http-equiv=\"refresh\" content=\"0;URL=studentlist.php\">";
} 


?>
<form action="contact.php" id="contact_form" method="POST">
					<p>
						<label>Name<span class="error name"> - Enter your name</span></label>
						<br />
						<input type="text" name="Name" />
					</p>
					<p>
						<label>Email<span class="error email"> - Incorrect email</span></label>
						<br />
						<input type="text" name="Email" />
					</p>
					<p>
						<label>Message<span class="error message"> - Enter the message</span></label>
						<br />
						<textarea name="Message" rows="5" cols="4" id="message_input"></textarea>
					</p>
					<p id="buttons">
						<input class="button" type="submit" value="Send" name="submitButton" />
						<input class="button" id="reset" type="reset" value="Clear" name="clearButton" />
					</p>
					<p id="success">The message was sent succesfully</p>
			  </form>
			
				<script type="text/javascript" SRC="js/jsform/init_form.js"></script><!-- initialization of the AJAX Javascript -->
			</div><!-- end grid -->
			
		  <div class="sidebar grid_4">
				<h3>Contact Info</h3>
				<ul class="green">
					<li>sharmashivam09298@gmail.com</li>
					<li>No Phone Number Found!</li>
					<li>New Delhi</li>
					<li>New delhi </li>
				</ul>
		  <!-- end grid -->
		</div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
<div id="sub_footer">
		<div class="container_12 clearfix">
		  <div class="grid_12"> <a class="logo left" href="#"></a>
		    <p><small><font color ="black">Copyright &copy;&nbsp;ChatRoom - Powered by sahil and shivam All rights reserved. |</font> <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
	      </div>
		  <!-- end grid -->
		</div><!-- end container -->
</div><!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
