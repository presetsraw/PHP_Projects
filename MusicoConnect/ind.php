<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<link rel="stylesheet" type="text/css" href="css/cycle.css" />

	

	<!-- Here is where your page title must go -->

	<title>Socialize Network&trade; - Powered by Quiambao Sytems&trade;</title>

	

	<link rel="shortcut icon" HREF="images/favicon.ico" />

	

	<!-- Metadescription and MetaKeyWords are used for SEO -->

	<meta content="Metadescription" name="Insert the description of this page here" />

    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />

	<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">

$(document).ready( function() {

	

	$("#bi").click( function() {

		$("#backin").fadeIn();

		$("#bi").fadeOut();

	});

	

	$("#mis").click( function() {

		$("#mission").fadeIn();

		$("#mis").fadeOut();

	});

	

	$("#vis").click( function() {

		$("#vision").fadeIn();

		$("#vis").fadeOut();

	});

	

	$("#man").click( function() {

		$("#mandate").fadeIn();

		$("#man").fadeOut();

	});	

	

	$("#int").click( function() {

		$("#intrams").fadeIn();

		$("#int").fadeOut();

	});	

	

	$("#che").click( function() {

		$("#cheer").fadeIn();

		$("#che").fadeOut();

	});	

	

	$("#ac").click( function() {

		$("#acq").fadeIn();

		$("#ac").fadeOut();

	});	

	

});

</script>

	<!-- JQUERY -->

	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>

	<!-- -END- JQUERY -->

	

	<!-- Cycle -->

	<script type='text/javascript' SRC="js/jquery.cycle.all.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function() {

			if ($('#slides').length > 0) {

				$('#slides').cycle({ 

					fx: 'fade',

					speed: 750,

					timeout: 6000, 

					randomizeEffects: false, 

					pager:  '#slidepager',

					cleartypeNoBg: true

				});

			}

		});

	</script>

	<!-- -END- Cycle -->

	

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

					<a HREF="index.php">Socialize&trade;</a>				</h1>

			</div><!-- end grid -->

			<div class="grid_9">

				<ul class="sf-menu">

					<li>

						<a class="current" HREF="index.php">Home</a>					</li>

					<li>

						<a href="login.php">Login</a>					</li>

					<li>

						<a HREF="register.php">Register</a>



					</li>

					<li><a HREF="contact.php">Contact</a></li>

				</ul>

				<!-- end sf-menu -->

			</div><!-- end grid -->

		</div><!-- end container -->

		<div class="clear"></div>

	</div>

	<!-- end header -->

	

	<div id="content">

	  <div class="container_16 clearfix">



			<div id="featured">

				<div class="grid_12">

					<div id="slideshow">

						<div id="slides">

							<img class="framed" SRC="images/featured/slide1.jpg" alt="Slide 1" />

							<img class="framed" SRC="images/featured/slide2.jpg" alt="Slide 2" />

							<img class="framed" SRC="images/featured/slide3.jpg" alt="Slide 3" />

							<img class="framed" SRC="images/featured/slide4.jpg" alt="Slide 4" />						</div>

						<div id="slidepager"></div>

					</div><!-- end slideshow -->

				</div><!-- end grid -->

				<div class="clear"></div>

			</div><!-- end featured -->

			<div class="grid_4">

				<h3 class="border">Background Info</h3>

				<p align="justify">

				<img class="icon" src="images/icon/backinfo.png" alt="Background Info" />

				 Socialized Network&trade; <div id="bi" style="color: #00FF00;">Read More..</div><div align="justify" id="backin" style="display:none; margin-top: -16px;"> - - - - - - - <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - - - - - - - <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - - - - - - - </div></p>

			</div>

			<div class="grid_4">

				<h3 class="border">Mission</h3>

				<p align="justify">

				<img class="icon" src="images/icon/mission.png" alt="Mission" />

				Socialized Network&trade;<div id="mis" style="color: #00FF00;">Read More...</div>

				<div align="justify" id="mission" style="display:none; margin-top: -16px;">Socialized Network&trade;</div></p>

			</div>

			<div class="grid_4">

				<h3 class="border">Vision</h3>

				<p align="justify">

				<img class="icon" src="images/icon/vision.png" alt="Vision" />

				Socialized Network&trade;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="vis" style="color: #00FF00;">Read More...</div>

				<div align="justify" id="vision" style="display:none; margin-top: -16px;">.</div></p>

			</div>

			<div class="grid_4">

				<h3 class="border">Network</h3>

				<p align="justify">

				<img class="icon" src="images/icon/mandate.png" alt="Mandate" />

				Socialized Network&trade; is a project by Quiambao Systems Network&trade; - (Christian John Quiambao) Networking Script <div id="man" style="color: #00FF00;">Read More...</div>

				<div align="justify" id="mandate" style="display:none; margin-top: -16px;">Socialized Network&trade;</div></p>

			</div>



			<hr class="grid_16" />



			<div class="grid_11 suffix_1 clearfix">

				<h3>Latest Happenings </h3>

				<ul class="blog_brief">

					<li class="entry clearfix">

						<div class="blog_info">

							<span class="date">Socialized Network&trade;</span>

							<span class="info"></span>

							<div class="clear"></div>

						</div>

						<a HREF="images/portfolio/intrams-02.jpg" rel="prettyPhoto[gallery]">

							<img class="grid_4 alpha blog_img framed" SRC="images/portfolio/intrams.jpg"/>						</a>

						<div class="grid_7 omega">

							<h4>---</h4>

							<p align="justify">

								Socialized Network&trade;<div id="int" style="color: #00FF00;">Read More..</div><div align="justify" id="intrams" style="display:none; margin-top: -16px;">

	<br /><br /> ---

	<br /><br /> ---

	<br /><br /> ---

	<br /><br /> ---			</div>				</p>

						</div>

					</li>

					<li class="entry clearfix">

						<div class="blog_info">

							<span class="date">Socialized Network&trade;</span>

							<span class="info"></span>

							<div class="clear"></div>

						</div>

						<a HREF="images/portfolio/acqauintance-02.jpg" rel="prettyPhoto[gallery]">

							<img class="grid_4 alpha blog_img framed" SRC="images/portfolio/acqauintance.jpg"/>						</a>

						<div class="grid_7 omega">

							<h4>---</h4>

							<p align="justify">

								

	Socialized Network&trade;<div id="ac" style="color: #00FF00;">Read More..</div><div align="justify" id="acq" style="display:none; margin-top: -16px;">

	<br /><br /> ---

	<br /><br /> ---

	<br /><br /> ---

	<br /><br /> ---	</div>



							</p>

						</div>

					</li>

					<li class="entry clearfix">

						<div class="blog_info">

							<span class="date">Socialized Network&trade;</span>

							<span class="info"></span>

							<div class="clear"></div>

						</div>

						<a HREF="images/portfolio/cheer-02.jpg" rel="prettyPhoto[gallery]">

							<img class="grid_4 alpha blog_img framed" SRC="images/portfolio/cheer.jpg"/>						</a>

						<div class="grid_7 omega">

							<h4>---</h4>

							<p align="justify">

								

	Socialized Network&trade;<div id="che" style="color: #00FF00;">Read More..</div><div align="justify" id="cheer" style="display:none; margin-top: -16px;">

	<br /><br /> ---

	<br /><br /> ---

	<br /><br /> ---

	<br /><br /> ---</div>



							</p>

						</div>

					</li>

				</ul><!-- end blog -->

			</div><!-- end grid -->

		  <!-- end sidebar, end grid -->

      </div>

		<!-- end container -->

	</div>

	<!-- end content -->

	<!-- end footer -->

<div id="sub_footer">

		<div class="container_12 clearfix">

			<div class="grid_12">

				<a class="logo left" href="#"></a>

				<p><small>Copyright &copy;&nbsp;2011 Socialize Network&trade; - Powered by Quiambao Sytems&trade; All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a href="about.php">About Us</a> </small></p>

			</div>

			<!-- end grid -->

		</div><!-- end container -->

</div><!-- end subfooter -->

	

	<!-- For CUFON Under IE -->

	<script type="text/javascript"> Cufon.now(); </script>

</body> 

</html>