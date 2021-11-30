<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!-- Here is where your page title must go -->
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>Socialize Network&trade; - Powered by Quiambao Sytems&trade; - <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>		
	<link rel="shortcut icon" HREF="images/favicon.ico" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	<!-- JQUERY -->
		<script type="text/javascript" src="js2/jquery.js"></script>
<script type="text/javascript" src="js2/jquery.watermarkinput.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	
	
	}




});
}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search");
   });
</script>


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
	
	<!-- Photo Gallery ********************************************************************** -->
	<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<!-- -END- Photo Gallery **************************************************************** -->
	
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
	
	<script SRC="js/portfolio.js" type="text/javascript"></script>

</head>
<?php
include ("session/session.php");
include("session/DBConnection.php");
?>

<body>
	<div id="header">
	  <div class="container_12">
			<div class="grid_3">
				<h1 class="logo">
					<a HREF="index.php">Socialize&trade;</a>
				</h1>
			</div><!-- end grid -->
			<div class="grid_9">
              <ul class="sf-menu">
                <li> <a href="home.php">Home</a> </li>
                <li> <a href="#">My Account</a>
                    <ul>
                      <li><a href="profile.php">My Profile</a></li>
                      <li><a href="info.php">My Info</a></li>
                      <li><a href="photos.php">My Photos</a></li>
                    </ul>
                </li>
                <li> <a href="friends.php">Friends
                  <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?>
                </a> </li>
                <li> <a href="mail.php">Messages
                  <?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="1" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?>
                </a> </li>
                <li> <a href="forums.php">Forums</a></li>
              </ul>
			  <!-- end sf-menu -->
            </div>
		  <!-- end grid -->
		</div><!-- end container -->
		<div class="clear"></div>
	</div><!-- end header -->
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
			  <?php  
		$user= $_GET['userid'];
		$query = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
							$show = mysql_fetch_array($query);	?>
				<p><a style="color:#51B22E; text-decoration:none;" id="cap" href="userprofile.php?userid=<?php echo $_GET['userid']; ?>"><?php echo $show['firstname'] . "  " . $show['lastname'] ?></a> » Photos</p>
			</div><!-- end grid -->
			
			<div class="grid_3">
			
			</div><!-- end grid -->
		</div><!-- end container -->
	</div>
	
 <div id="content" style="min-height:400px;">
		<div class="container_12 clearfix">
			<ul class="portfolio clearfix">
		
							<?php
$user=$show['username'];
$result = mysql_query("SELECT * FROM uploads WHERE username='$user'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo '<span>Photos </span> <font size="2" color="red"><b>' . $numberOfRows .'</b></font><br />'; 
	?><br /><?php
									$con=mysql_connect("mysql1.000webhost.com","a7419635_devsys2","chr7q090292");
									
									mysql_select_db("a7419635_devsys2", $con);
									if (isset($_GET['chmsc']))
									{
									$chmsc=$_GET['chmsc'];
									$chmsc=mysql_real_escape_string($chmsc);
									}
									else
										$chmsc=1;
									?>
                                         
                                            <?php
 									$userid=$_GET['userid'];
 									$user=$show['username'];
									$result=mysql_query("SELECT * FROM uploads WHERE username='$user'",$con);
									$rows=mysql_num_rows($result);
									$per_page=9;
									
									$total_pages=ceil($rows/$per_page);
										echo"page $chmsc of $total_pages<br>";
										
										if($chmsc!=1)
										{
										echo "<a href='friends_photos.php?userid=$userid&chmsc=1'>Next </a>","  ";
										$previous=$chmsc-1;
										echo "<a href='friends_photos.php?userid=$userid&chmsc=$previous'> Previous</a>", "  ";
										}
										if (($chmsc!=1) && ($chmsc!=$total_pages))
										echo "||";
										if($chmsc!=$total_pages)
										{
										$next=$chmsc+ 1;
										echo "<a href='friends_photos.php?userid=$userid&chmsc=$next'>First </a>","  ";
										echo "<a href='friends_photos.php?userid=$userid&chmsc=$total_pages'> Last</a>";
										}
										echo "<br/><br/>";
										$x=($chmsc-1)*$per_page;
										
										$sql="SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM uploads WHERE username= '$user' ORDER BY upload_id DESC limit $x, $per_page";
										$z= mysql_query($sql, $con);
									
									while($r = mysql_fetch_array($z))
									
									{
						
						echo '<li class="grid_view grid_4 clearfix">';				
					echo '<a class="lightbox clearfix" HREF="'. $r["image"] .'" rel="prettyPhoto[gallery]">';
					echo '<img height=189 width=262 class="framed" SRC="'. $r["image"] .'" alt="'. $r["image_name"] . '" /></a>';
					echo '<div class="text">';
					echo '<h3><a HREF="portfolio_single.html">' .$r['image_name']. '</a></h3>';
					echo '<p>';
											 echo '<font style="color:#000099;font-size: 10px;">';
	$days = floor($r['TimeSpent'] / (60 * 60 * 24));
			$remainder = $r['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $r['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font><br />';

			$id = $r['upload_id'];		
				echo '</p>';
						echo '<a HREF="portfolio_single.html"><small>';
						$result = mysql_query("SELECT * FROM photoscomment WHERE upload_id='" .$id."'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<a href="friend_photoscomment.php?pid=' . $id . '">';
	echo $numberOfRows .'&nbsp;Comment/s</small></a>';
					echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo '</div></li>';
									/*echo '<div align="left">';
									echo '<a href="'. $row["image"] .'" title="Photos" rel="gallery-plants" class="thickbox">';
									echo "<img width=100 height=100 src='" . $row["image"] . "'>";
									echo '</a>';
									echo '<br />';
									echo '<br />';
									echo '<span class="style40">' .$row["image_name"]. "</span>";
									echo '<br />';
									$name =  $row['username'];
									$query = mysql_query("SELECT * FROM members WHERE username = '$name' ") or die (mysql_error()); 
									$display = mysql_fetch_array($query);
									
									echo "uploaded by:  " . '<b class="style40">' . $display["firstname"] . " " . $display["lastname"] . '</b>';
									echo '</div>';
									*/
									  
									
									}				
										
									?>
				<!-- end grid -->
				<!-- end grid -->
			   
			</ul>
			<!-- end portfolio -->
			<!-- end grid -->
	  </div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
<div id="sub_footer">
		<div class="container_12 clearfix">
		  <div class="grid_12"> <a class="logo left" href="#"></a>
		    <p><small>Copyright &copy;&nbsp;2011 Socialize Network&trade; - Powered by Quiambao Sytems&trade; All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
	      </div>
		  <!-- end grid -->
		</div><!-- end container -->
</div><!-- end subfooter -->
	
	<!-- PRETTYPHOTO SCRIPT INICIALITATION -->
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});
	</script>
	<!-- END PRETTYPHOTO SCRIPT INICIALITATION -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
