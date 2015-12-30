<!DOCTYPE html>
<?php

if(isset($_POST['submit'])){

	include "connect.php";
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = md5(mysqli_real_escape_string($conn, $_POST['password']));
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$query = "INSERT INTO users (username, password, name) VALUES ('$username', '$password', '$name')";	

	if(!mysqli_query($conn, $query)){
		die('error inserting new record');
	}	

	$newrecord = "Registered!";

	mysqli_close($conn);

} // end of if statement


?>

<form action="insert.php" method="post">
	Enter Name:<input type="text" name="username"><br/>
	Enter Username:<input type="text" name="name"><br/>
	Enter Password:<input type="password" name="password"><br/>
	<input type="submit" name="submit">
</form>

<?php 

echo $newrecord;

?>
