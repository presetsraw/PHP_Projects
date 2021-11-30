<?php session_start();?>
<?php
include("session/DBConnection.php");
$username = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$username'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
$password = $display['password'];
$sql = "DELETE FROM users WHERE username = '$username' AND password = '$password'";
	$add_member = mysql_query($sql);

?>
<?php
  @session_destroy('is');
  @session_unset();

 echo '<meta http-equiv="refresh" content="1;url=index.php">';
 ?>
