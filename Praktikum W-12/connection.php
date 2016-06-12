<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pemogramanweb";

mysql_connect($host,$user,$pass) or die ("Connecting failed!!");
mysql_select_db("pemogramanweb") or die ("Database not found!!");
?>