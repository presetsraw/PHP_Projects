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
<title>FaceMash&trade; - Powered by Issac Maximas&trade; - <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
<link href="forums.css" rel="stylesheet" type="text/css" />
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
	<link rel="shortcut icon" HREF="images/favicon.ico" />
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
<div id="total" style="margin-top: 140px; height:542px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
  <div id="con_right" >
    <div class="table_title"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="49%">Latest Threads </td>
    <td width="15%" align="center">AUTHOR</td>
    <td width="15%" align="center">CATEGORY</td>
    <td width="9%" align="center">REPLY</td>
    <td width="22%" align="center">DATE</td>
  </tr>
</table>
</div>
    <div class="table_con" style="overflow:scroll; height: 332px;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<?php 

$result = mysql_query("SELECT * FROM forums ORDER BY forum_id DESC");

while($row = mysql_fetch_assoc($result)) {

echo '<tr>';
 echo '<td width="9%" align="center" valign="middle" bgcolor="#ebebeb"><img src="images/image_18.jpg" alt="Folder" width="19" height="17" align="absmiddle" /></td>';
 echo '<td width="40%" bgcolor="#ebebeb">';
 echo "<a href='reply_forum.php?fid=".$row['forum_id']."'>";
 echo $row['title'] . '</a></td>';
 $userid = $row['authors_id'];
 $query = mysql_query("SELECT * FROM members WHERE member_id = '$userid'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);
  echo '<td width="15%" align="center" bgcolor="#d9d9d9" class="style5" style="text-transform:capitalize;">'. $display['firstname'] ." " . $display['lastname'];'</td>';
  echo '<td width="15%" align="center" bgcolor="#d9d9d9" class="style5">'. $row['category'] .'</td>';
  $id = $row['forum_id'];
 $result1 = mysql_query("SELECT * FROM forum_reply WHERE forum_id=$id");
	
	$numberOfRows = MYSQL_NUMROWS($result1);	
	if($numberOfRows > 0){
 echo '<td width="9%" align="center" bgcolor="#d9d9d9" class="style5">'. $numberOfRows .'</td>'; }
 if($numberOfRows == 0){
 echo '<td width="9%" align="center" bgcolor="#d9d9d9" class="style5">&nbsp;0</td>'; }
  echo '<td width="22%" align="center" bgcolor="#d9d9d9" class="style5">'. $row['date'] .'</td></tr>';

   /* <td width="9%" align="center" bgcolor="#bcbcbc" class="style5">30</td>
    <td width="23%" bgcolor="#ebebeb">
    <span class="style4">by webmasterchris</span>
    <span class="style3">Sat Aug 01, 2009 12:06 pm</span> </td>';
  </tr>*/
 } ?>
  
 
</table>
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
			<option selected="selected">Select Category:</option>
  			  <option value="General Discussions">General Discussions</option>
  			  <option value="All About Web Development">All About Web Development</option>
  			  <option value="Quiambao Systems Tutorials">Quiambao Systems Tutorials</option>
  			  <option value="Help & Support">Help & Support</option>

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
	
	$numberOfRows = MYSQL_NUMROWS($result);	
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
  <div class="grid_12"> <a class="logo left" href="#" style="color: #fff; text-decoration:none;"></a> <small>Copyright &copy;&nbsp;2011 FaceMash&trade; - Powered by Issac Maximas&trade; All rights reserved. | <a style="color: #fff; text-decoration:none;" href="copyright.php">Copyright</a> |<a style="color: #fff; text-decoration:none;"  href="terms.php">Terms and Conditions</a> | <a style="color: #fff; text-decoration:none;" href="privacy.php">Privacy Policy</a> | <a style="color: #fff; text-decoration:none;"  class="current" href="about.php">About Us</a></small> </div>
</div>
</body>
</html>

