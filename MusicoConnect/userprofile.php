<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/ppic.css" />	
	<script type="text/javascript" src="js/popup.js"></script>
<link rel="stylesheet" type="text/css" href="css/sample.css" />

	<!-- Here is where your page title must go -->
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>Deziblesound  - Powered by Quiambao Sytems&trade; - <?php echo $display['firstname'] . " " . $display['lastname'] ?> Profile :) </title>	
<link rel="shortcut icon" HREF="images/favicon.ico" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
		<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
			
	<!-- JQUERY -->
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#add").click( function() {
		$("#forms").fadeIn();
		$("#add").fadeOut();
	});	
		$("#add2").click( function() {
		$("#forms2").fadeIn();
		$("#add2").fadeOut();
	});	
});
</script>
	<!--<script language="Java Script" type="text/javascript">
function addSC(textToAdd)
{
document.form.content.value += textToAdd;
document.form.content.focus();
}
</script>-->

	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<!-- -END- JQUERY -->
	    <script type="text/javascript" SRC="js/js2/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" SRC="js/js2/jquery.easing.1.3.js"></script>
    <script type="text/javascript" SRC="js/js2/jquery.nivo.slider.js"></script>
    <script type="text/javascript" SRC="js/js2/twitter.js"></script>
    <script type="text/javascript" SRC="js/js2/custom.js"></script>
	
    <!-- /JQUERY & PLUGINS -->
    
    <!-- CUFON REPLACEMENT FONT -->
	<script SRC="js/js2/cufon-yui.js" type="text/javascript"></script>
    <script SRC="js/js2/tindog_400.font.js" type="text/javascript"></script>

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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#add2").click( function() {
		$("#forms").fadeIn();
		$("#add2").fadeOut();
	});	
	$("#request").click( function() {
		$("#add2").fadeOut();
	});	
	$("#confirm").click( function() {
		$("#add2").fadeOut();
	});	
	$("#friend").click( function() {
		$("#add2").fadeOut();
	});	
	
});
</script>
</head>
<?php
include ("session/session.php");
include("session/DBConnection.php");
$error="";
?>

<body>
	<div id="header">
	  <div class="container_12">
			<div class="grid_3">
				<h1 class="logo">
					<a HREF="home.php">DezibelSound&trade;</a>
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
                <li> <a href="forums.php">Forums</a> </li>
              </ul>
			  <!-- end sf-menu -->
            </div>
			<!-- end grid -->
	  </div><!-- end container -->
		<div class="clear"></div>
	</div><!-- end header -->
	<div id="content" style="min-height:400px;">
		<div class="container_16 clearfix">
			<div class="grid_11 suffix_1 clearfix" style="height: auto;">
				<ul class="blog_brief">
				  <li class="entry clearfix">
						<?php 
$user= $_GET['userid'];
$image=mysql_query("SELECT * FROM members WHERE member_id='$user'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['image']= $row['image'];
			/*echo '<div class="pp_hoverContainer" style="margin-left: 20px; height: 273px; width: 204.005px;">
<a class="pp_next" href="#" style="visibility: visible;">Chage Profile Picture</a>
</div>';*/
			echo '<img class="framed" width=130 height=150 align="left" SRC="' . $_SESSION['image'] . '" alt="Unable to view" />';
    		/*			echo "<img class='grid_4 alpha blog_img framed' SRC='" . $_SESSION['image'] . "' alt='Unable to view' />";
*/			/*echo "<img width=190 height=180 alt='Unable to View' src='" . $_SESSION['image'] . "'>";*/
			?><?php  
		$user= $_GET['userid'];
		$query = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>
						<div class="grid_7 omega">
							<h4><a href="userprofile.php?userid=<?php echo $_GET['userid']; ?>" id="catchy"><?php echo $result['firstname'] . " " . $result['lastname']; ?></a></h4>
							 				<form id="share" method="get" action="save2.php" name="form">
            <label>
              <p>                   <textarea name="content" id="sharetext"  cols="50" rows="1" onclick="this.value='';">Write Something on my  wall....
                </textarea>
                </p>
               <p>                  <input name="username" type="hidden" id="namebox" value="<?php echo $display['username']?>"/>
                  <input name="firstname" type="hidden" id="namebox" value="<?php echo $display['firstname']?>"/>
                  <input name="lastname" type="hidden" id="namebox" value="<?php echo $display['lastname']?>"/>
				 <input name="f_username" type="hidden" id="namebox" value="<?php echo $result['username']?>"/>
                <input name="f_firstname" type="hidden" id="namebox" value="<?php echo $result['firstname']?>"/>
                <input name="f_lastname" type="hidden" id="namebox" value="<?php echo $result['lastname']?>"/>
                <input name="picture" type="hidden" id="namebox" value="<?php echo $display['image']?>"/>
				<input type="hidden" name="id" value="<?php echo $_GET['userid']; ?>" />
                  <input name="picture" type="hidden" id="namebox" value="<?php echo $display['image']?>"/>
                </p>
			</label>
            <p>
                      <input name="post" class="button" id="speak" type="submit" value="Share" />	
      
            </p>
          </form>
		  <br /><?php if (empty($error)) { $error = "Message sent"; } ?>
<br /><div align="left"></div><br /><br /><div id="div" style="margin-top: -46px; margin-left: 0px;">
<a href="userprofile.php?userid=<?php echo $_GET['userid']; ?>">Wall</a>&nbsp;|&nbsp;<a href="friends_photos.php?userid=<?php echo $_GET['userid']; ?>">Photos</a>&nbsp;|&nbsp;<a href="friends_info.php?userid=<?php echo $_GET['userid']; ?>">Info</a>&nbsp;|&nbsp;<a href="friendsfriend.php?userid=<?php echo $_GET['userid']; ?>">Friends</a>&nbsp;|&nbsp;<div id='basic-modal' style="margin-top: -18px; margin-left: 205px;">
                  <a class='basic' href="#" style="text-decoration:none; margin-left: 0px;">
        Send Message</a></div><div id="basic-modal-content">
                  <form id="form1" method="post" action="userprofile.php?userid=<?php echo $_GET['userid']; ?>">
                    <p align="left" style="color: gold;">To:
					<div id="friend" style="text-transform:capitalize;">&nbsp;<?php echo $result['firstname'] . " " . $result['lastname'] ?>&nbsp;</div>
							<input type="hidden" name="friend" value="<?php echo $result['username']; ?>">
                    </p><br />
                   <p align="left" style="color: gold;">Message:
                      <textarea style="color: #fff;" name="content" cols="35" rows="6" id="textarea"></textarea>
                      <br /><div align="left">
                      <input type="submit" class="button" name="send" value="Submit" />&nbsp;<input type="reset" class="button" name="reset" value="Reset" /></div>
                   </p>
                  </form>
                </div>
			 <br />
</div><div class="box" id="photos" style="margin-left: -148px; margin-bottom: 2px; margin-top: 10px;">
				
<?php
$username =  $result['username'];
$query  = "SELECT * FROM uploads WHERE username = '$username' ORDER BY upload_id DESC LIMIT 3 ";
$result1 = mysql_query($query);

while($row = mysql_fetch_assoc($result1))
{
echo '<a rel="prettyPhoto[gallery]" class="lightbox" HREF="'. $row["image"] .'">';
echo '<img class="framed" height=100 width=100 SRC="'. $row["image"] .'" title="' . $row["image_name"] . '" />';
echo '</a>';
echo '&nbsp;';
}
?> <p>&nbsp;</p>

      </div>
														
<?php
$error ="";
if(isset($_POST['send'])){ 
$today = date("m/d/Y");
$user = $_SESSION['log']['username'];
$status = 'unread';

if (empty($error)) {
$query = "INSERT INTO messages SET sender='$user', recipient='$_POST[friend]', content='$_POST[content]', date_sent='$today', status='$status'";
mysql_query($query) or die('Error, insert query failed');
}

if (empty($error)) { $error = "Message sent"; }

}

?><br />
</div>
	<?php  
		$user= $_GET['userid'];
		$query = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>		
		
<?php
$username =  $result['username'];
$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM post WHERE friend ='$username' OR username = '$username' ORDER BY post_id DESC LIMIT 10";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))

{				 echo '<li class="entry clearfix">';
				 echo '<div class="blog_info">';
				 /*echo '<span class="date"></span>';*/
				 echo '<span class="info" style="float: left;">';
$user = $row['username'];
$q = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$dis = mysql_fetch_array($q);
$ff = $row['friend'];
$ss = mysql_query("SELECT * FROM members WHERE username = '$ff'") or die (mysql_error()); 
$gwa = mysql_fetch_array($ss);
$username =  $_SESSION['log']['username'];
$id = $dis['member_id'];
if($row['username'] == $row['friend']){
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; 

				 echo '&nbsp;says that..</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';

}


				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; 

				 echo '&nbsp;says that..</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />'; };
				 echo '<div class="grid_7 omega">';
 $position=30; // Define how many character you want to display.

$content= $row['content']; 
$post = wordwrap($content, 8, "\n", true); 

				 echo '<p style="color: #000;"><a style="color: #000;" HREF="postcomment.php?pid='. $row['post_id'].'">' . $post . '</a></p><br />';
				 }
				 
		if($row['username'] != $row['friend']){
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }
				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }

				 echo '&nbsp;&nbsp;says to</span>';
				 if($row['friend'] == $username){
				 echo '<a href="profile.php">';
				 echo '<span style="text-transform: capitalize; font-size: 10px;">' .$row['friend_firstname'] . " " . $row['friend_lastname'] . '</span></a>'; }
				elseif($row['friend'] != $username){
				 echo '<a href="userprofile.php?userid=' . $gwa['member_id'] . '">';
				 echo '<span style="text-transform: capitalize; font-size: 10px;">' .$row['friend_firstname'] . " " . $row['friend_lastname'] . '</span></a>'; }
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $row['picture'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';
				 echo '<div class="grid_7 omega">';
 $position=30; // Define how many character you want to display.

$content= $row['content']; 
$post1 = wordwrap($content, 8, "\n", true); 

				 echo '<p style="color: #000;"><a style="color: #000;" HREF="postcomment.php?pid='. $row['post_id'].'">' . $post1 . '</a></p><br />';
				 }
		 
		 
				 echo '<font style="color:#000099;font-size: 10px;">';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font><br />';

$qqq = mysql_query("SELECT * FROM postcomment WHERE post_id='" . $row['post_id']."'");
	$numberOfRows = MYSQL_NUMROWS($qqq);
	if ($numberOfRows > 0){
	if ($numberOfRows == 1){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>1 comment</small></a>';}
	if ($numberOfRows==3 || $numberOfRows==2){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>' . $numberOfRows. " comments</small></a>";}
	if ($numberOfRows >= 4){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>('. $numberOfRows.')View all comments</small></a>'; }
	}echo '<br /><br />';
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE post_id=" . $row['post_id'] . " ORDER BY comment_id ASC LIMIT 3";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{				 
		echo '<br /><div id="comment">';
		$user = $row1['commentby'];
$s = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$d = mysql_fetch_array($s);
$id = $d['member_id'];

		echo '<img class="framed" height=40 width=40 align="left" SRC="'. $d['image'] .'" alt="'. $row1['firstname'] . " " . $row1['lastname'] .'" />';
		echo '&nbsp;';
		echo '<span class="nn">';
		$username =  $_SESSION['log']['username'];
$id = $d['member_id'];
if($user == $username){
 echo '<a href="profile.php" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }
elseif($user != $username){
 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }	
		 $position1=30; // Define how many character you want to display.

$content1= $row1['content']; 
$post2 = wordwrap($content1, 8, "\n", true); 
echo '<a style="color: #000;" HREF="postcomment.php?pid='. $row1['post_id'].'">' . $post2 . '</a>';
				 	
	
		echo '<br />';
		echo '&nbsp;';
		echo '<font style="color:#000099;font-size: 10px;">';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</font>';				
		echo '</div>';
	
	}
		$qr = mysql_query("SELECT * FROM members WHERE username='".$_SESSION['log']['username'] ."'");
echo "<br />";
while($row3 = mysql_fetch_array($qr))
  {  
	echo '<div class="fieldcomment">';
	echo '<form action="friendcommentpost.php" method="GET">'; 
	echo'<input type="hidden" name="post_id" value="'. $row['post_id'] .'">';
	echo'<input type="hidden" name="username" value="'. $row3['username'] .'">';
	echo'<input type="hidden" name="firstname" value="'. $row3['firstname'] .'">';
	echo'<input type="hidden" name="lastname" value="'. $row3['lastname'] .'">';
	echo'<input type="hidden" name="picture" value="'. $row3['image'] .'">';
	echo'<input type="hidden" name="id" value="'. $_GET['userid'] .'">';
	echo '<img class="framed" height=40 width=40 align="left" SRC="'. $row3['image'] .'" alt="'. $row3['firstname'] . " " . $row3['lastname'] .'" />';
	echo '&nbsp;';
	echo '<input type="text" value="Leave a comment" onclick="this.value=\'\'" style="color: #333333; width: 200px;" name="postcomment" />';
	echo '&nbsp;<input type="submit" value="Post" style="background-color: #333; color: #fff; width: 50px;" name="post" />';
	echo '</form></div>';
	echo '</div></li>';
		} 
}
?>





				 <br />
				</ul>
				<!-- end blog -->
			</div><!-- end grid --> 
			
			<div class="sidebar grid_4">
			<div align="left" style="width: 300px; text-transform:capitalize;">
			<div align="center" style="width: 200px;">
<?php  
		$user= $_GET['userid'];
		$qry = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
							$show = mysql_fetch_array($qry);	
															?> 
															<?php 
	$username = $_SESSION['log']['username'];
	$fname = $show['username'];
	$sql  = "SELECT * FROM friends WHERE username='$username' OR friend='$username'";
if($sql == 0){
//echo '<div id="add2"><img width=140 height=40 src="images/add.png" alt="" /></div>';
echo '<div id="add2"><img width=140 height=120 src="images/add.jpg" alt="" /></div>';
}
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
$fuser = $row['username'];
$userfriend = $row['friend'];
$status = $row['status'];
$fid = $row['friend_id'];
if ($row['friend'] != $username) { $friend = $row['friend']; } else { $friend = $row['username']; }

if($fuser == $username && $userfriend == $fname && $status == 'requesting'){
 echo '<script type="text/javascript">';
 echo '$(document).ready( function() {';
 echo '$("#add2").hide()';
 echo '});';
 echo '</script>';
 
echo '<div id="request">Request Sent</div>';

}
if($fuser == $fname && $userfriend == $username && $status == 'requesting'){
echo '<span style="color:#000099; font-weight: bold;">' . $show['firstname'] . " " . $show['lastname'] . '</span>&nbsp;wants to make friends with you.';
echo '<br /><br /><br />';
 echo '<script type="text/javascript">';
 echo '$(document).ready( function() {';
 echo '$("#add2").hide()';
 echo '});';
 echo '</script>';
echo '<div align="center" id="confirm" style="width: 81px;"><a href="action2.php?accept=' .$fid . '&status=approve" "><img src="images/check.jpg" title="Confirm" width=20 height=20 alt="Confirm" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="action2.php?decline=' .$fid . '&status=decline""><img src="images/ex.jpg" title="Decline" width=20 height=20 alt="Ignore" /></a></div>	'; }
if($friend == $fname && $status = 'accepted'){
 echo '<script type="text/javascript">';
 echo '$(document).ready( function() {';
 echo '$("#add2").hide()';
 echo '});';
 echo '</script>';
echo "<div id='friend'></div>";
}

}

/*elseif($sql==0){
echo '<div id="add2"><img width=140 height=40 src="images/add.jpg" alt="" /></div>';
} */

?>
 </div>
 <div id="forms" style="display:none; width: 200px;">
 <form action="addfriend.php?action=add"  method="post">
<input type="hidden" value="<?php echo $show['username']; ?>" name="friend" />
<center>
Make friends with <br /><span style="color: #000099; font-weight:bold; text-transform: capitalize;"><?php echo $show['firstname'] . " " . $show['lastname']; ?></span> ? 
<br /><br /> 
<input class="button" name="add" type="submit" id="add" value="OK">
</center>
</form></div>
<!-- Cols 1 -->
<!-- /Cols 1 -->
			</div><!-- end sidebar, end grid -->
		</div>
		<!-- end container -->
	<br /><br /><br /><br /><br /><br /></div><!-- end content -->
	</div>
	<!-- end footer -->
<div id="sub_footer">
		<div class="container_12 clearfix">
		  <div class="grid_12"> <a class="logo left" href="#"></a>
		    <p><small>Copyright &copy;&nbsp;Deziblesound  - Powered by Issac Meximas All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
	      </div>
		  <!-- end grid -->
		</div><!-- end container -->
</div>	<!-- end subfooter -->

	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>