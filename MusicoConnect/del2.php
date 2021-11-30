<?php
if(isset($_POST['delete']))
{
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "musicosocialize_db";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$member_id = $_POST['member_id'];

$sql = "DELETE member ".
       "WHERE member_id = $member_id" ;

mysql_select_db('musicosocialize_db');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
link("del2.php,memberlist.php");
//<a href="memberlist.php">Delete</a>;
}
else
{
?>