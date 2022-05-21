<?php


$host="localhost";
$user_name="root";
$password="toor1234";
$DB_name="hcuis";
$connection=mysql_connect($host,$user_name,$password);
mysql_select_db($DB_name,$connection);
if($connection) echo " ";// echo "connected<br>";
else die(mysql_error());

echo  "";//echo "database here<br>";
?>
