<?php
$dbhost = 'localhost:3308';
$dbuser = 'root';
$dbpass = '';
$db     = 'hotel';

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die(mysql_error());
?>