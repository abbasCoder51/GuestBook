<?php

    	//open connection to mysql db
	$servername = "localhost";
	$username = "******";
	$password = "******";
	$database = "******";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Can not connect: " . mysql_error());
}

?>