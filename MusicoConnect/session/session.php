<?php
error_reporting();
if (empty($_SESSION['log']['username'])) {
require('session/denied.php');
exit;
}
$username =  $_SESSION['log']['username'];
if (!$username) { 
require('session/denied.php');
exit;
}
?>
