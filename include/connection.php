<!--
create database for els.
make admin account for els
username = els123
pass = test123
-->
<?php
session_start();
$i_connection = mysqli_connect("127.0.0.1","els123","test123","els");

if(!$i_connection)
{
	echo "cant connect to database!, please check your sentences,or database connection information";
	exit;
} else {

	echo "successfully connected to databases!";
	//use this variable in every paramater, because we are using mysqli .
	global $i_connection;
}
?>