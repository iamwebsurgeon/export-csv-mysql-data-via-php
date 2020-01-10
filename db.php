<?php
//Database details
$dbhost     = 'localhost';
$dbusername = 'root';
$dbpass = '';
$db     = 'logixxtuts';

//Create connection and select DB
$conn = mysqli_connect($dbhost, $dbusername, $dbpass, $db);

if(mysqli_connect_errno()){
	echo "Failed to Connect with Database: " . mysqli_connect_errno();
	exit();
}

?>