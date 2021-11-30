<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>DezibelSound&trade; - Powered by Issac Maximas&trade; - <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
	<link rel="shortcut icon" HREF="images/favicon.ico" />
<link href="forums.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function ctck()
{
var sds = document.getElementById("dum");
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
}
</script> 
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#reply").click( function() {
		$("#forms").fadeIn();
		$("#reply").fadeOut();
	});	
});
</script>
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />

    <!-- /CSS -->
		
    <!-- JQUERY & PLUGINS -->
	<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</head>
<?php
include("session/DBConnection.php");
include("session/session.php");
$error = "";
?>
<body style="background-color:#ddfece;">
<div id="total" style="margin-top: 140px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
  <div id="con_right" style="height:542px;">
    <div class="table_title">
	<?php
	 $id = $_GET['fid'];
 $result1 = mysql_query("SELECT * FROM forum_reply WHERE forum_id=$id");
	
	$numberOfRows = MYSQL_NUMROWS($result1);	
	if($numberOfRows > 0){
echo '<font size="2" color="#fff"><b>' . $numberOfRows .' Reply</b></font>';} 
	?>
</div>
    <div class="table_con" style="background-color: #fff; height:330px; overflow: scroll;">
	
	<?php
$fid = $_GET['fid'];
$id = $display['member_id'];
$query  = "SELECT * FROM forums WHERE forum_id='$fid'";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)) {
 echo '&nbsp;<span style="color: #000066; font-weight: bold;">'.$row['title'].'</span>';
 echo '&nbsp;&nbsp;<span style="margin-left: 300px; color:#333;">Author: </span>';
 $user = $row['authors_id'];
 
 $query = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);
 echo '<span style="text-transform: capitalize; color: BLUE; font-weight: bold;">';
 echo $display['firstname']. " " . $display['lastname'];
 echo '</span>&nbsp;&nbsp;<span style="color: #333;">'. $row['date'] . '</span><br/><span style="color: blue; font-weight:bold; padding-left: 20px;">'.$row['content']. '</span><br />';

$query1  = "SELECT * FROM forum_reply WHERE forum_id='$fid' ORDER BY reply_id ASC";
$result1 = mysql_query($query1);

while($row = mysql_fetch_assoc($result1)) {
$uid = $row['poster_id'];
$query2  = "SELECT * FROM members WHERE member_id='$uid'";
$result2 = mysql_query($query2);

while($row2 = mysql_fetch_assoc($result2)){

 echo "<div style='border-top: 1px solid #000;'><span style='color:#333;padding-left: 350px;'>Posted By: </span>&nbsp;<span style='color:blue; text-transform: capitalize;'>" .$row2['firstname']." " . $row2['lastname']."</span>&nbsp;<span style='color: #333;'>". $row['date']. "</span><br /><br />&nbsp;&nbsp;<span style='color: blue;'>".$row['reply']."</span></div><br />";}
}}?>
<div id="reply"><br /><br />Reply to this Post</div>

<div id="forms" style="display:none">
<form action="save_reply.php" method="GET">
<table>
<tr><td><textarea name="reply_post"></textarea></td></tr>
<tr><td><input type="submit" name="submit" value="Post" /></td></tr>
<input type="hidden" name="poster_id" value="<?php echo $id; ?>" />
<input type="hidden" name="forum_id" value="<?php echo $fid; ?>" />
</table>
</form>
</div>

</div>
<div class="table_title"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="44%">List of Categories</td>
    <td width="15%">&nbsp;</td>
	<td width="20%">&nbsp;</td>
	<td width="35%"><div id='basic-modal'><a class='basic' href="#" style="text-decoration:none; color: #fff;"><img src="images/add_thread.png" width="20" height: "20" style="border: none;"/>Add New Thread</a></div></td>
	
  </tr>
</table>
  <div id="basic-modal-content">
	  <form method="post" action="save_forums.php"><br /><br /><br />
  			<span style="color: #FFFF00; font-size: 18px; font-weight: bold;">Category: <select name="category">
			<option selected="selected">Select Category</option>
  			  <option value="students">Students</option>
  			  <option value="alumni">Alumni</option>
  			  <option value="Faculty_and_Staff">Faculty and Staff</option>
  			  <option value="CIT">CIT</option>
  			  <option value="coed">CoEd</option>
  			  <option value="SAS">SAS</option>
  			  <option value="SSG">SSG</option>
  			  <option value="technopacer">Technopacer</option>
  			  <option value="PSITS">PSITS</option>

  			</select></span>
			
						<span style="color: #FFFF00; font-size: 18px; font-weight: bold;">Topic: <input type="text" name="title"/></span><br /><br />
						<span style="color: #FFFF00; font-size: 18px; font-weight: bold;">Content: <textarea name="content" style="width: 250px;"></textarea></span><br />
						<br /><p>
				 <br />
						<input type="submit"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="submit" value="Add" /><br /><br />
                      <input type="reset"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="reset" value="Reset" />
                     
				  </p>
			  </form>
		    </div>
</div>
    <div class="table_con"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="9%" align="center" valign="middle" bgcolor="#ebebeb"><img src="images/image_18.jpg" alt="Folder" width="19" height="17" align="absmiddle" /></td>
    <td width="50%" bgcolor="#ebebeb">
    <span class="style1"><a href="categories.php?action=Quiambao Systems Tutorials">Quiambao Systems Tutorials</a></span></td>
    <td width="9%" align="center" bgcolor="#d9d9d9" class="style5"><?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM forums WHERE category='Quiambao Systems Tutorials'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="2" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?></td>
    
  </tr>
  <tr>
    <td width="9%" align="center" valign="middle" bgcolor="#ebebeb"><img src="images/image_18.jpg" alt="Folder" width="19" height="17" align="absmiddle" /></td>
    <td width="50%" bgcolor="#ebebeb">
    <span class="style1"><a href="categories.php?action=Help & Support">Help & Support</a></span></td>
    <td width="9%" align="center" bgcolor="#d9d9d9" class="style5"><?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM forums WHERE category='Help & Support'");
	
	$numberOfRows = MYSQL_NUMROWS($result
	);	
	if($numberOfRows > 0){
	echo '<font size="2" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?></td>
   
   
  <tr>
    <td width="9%" align="center" valign="middle" bgcolor="#ebebeb"><img src="images/image_18.jpg" alt="Folder" width="19" height="17" align="absmiddle" /></td>
    <td width="50%" bgcolor="#ebebeb">
    <span class="style1"><a href="categories.php?action=General Discussions">General Discussions</a></span></td>
    <td width="9%" align="center" bgcolor="#d9d9d9" class="style5"><?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM forums WHERE category='General Discussions'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="2" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?></td>
  
    
  </tr>
  <tr>
    <td width="9%" align="center" valign="middle" bgcolor="#ebebeb"><img src="images/image_18.jpg" alt="Folder" width="19" height="17" align="absmiddle" /></td>
    <td width="50%" bgcolor="#ebebeb">
    <span class="style1"><a href="categories.php?action=All About Web Development">All About Web Development</a></span></td>
    <td width="9%" align="center" bgcolor="#d9d9d9" class="style5"><?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM forums WHERE category='All About Web Development'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="2" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?></td>
  </tr>
</table>
</div>
  </div>
<div id="con_left">
    <div id="con_left-header">
    <div id="navigation">
    <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="profile.php">Profile</a></li>
        <li><a href="mail.php">Messages  <?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="1" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?></a></li>
 <li><a href="friends.php">Friends  <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?></a></li>
 <li><a href="photos.php">Photos</a></li>
 <li><a href="forums.php">Forums</a></li>

    </ul>
    </div>
    </div>
    
    </div></td>
  </tr>
</table>
</div>
</div>
<div id="fotter">
  <div class="grid_12"> <a class="logo left" href="#" style="color: #fff; text-decoration:none;"></a> <small>Copyright &copy;&nbsp;DezibelSound&trade; - Powered by Issac Maximas&trade; All rights reserved. | <a style="color: #fff; text-decoration:none;" href="copyright.php">Copyright</a> |<a style="color: #fff; text-decoration:none;"  href="terms.php">Terms and Conditions</a> | <a style="color: #fff; text-decoration:none;" href="privacy.php">Privacy Policy</a> | <a style="color: #fff; text-decoration:none;"  class="current" href="about.php">About Us</a></small> </div>
</div>
</body>
</html>

