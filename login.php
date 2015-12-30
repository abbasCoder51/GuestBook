<?php session_start(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<style>
.glyphicon{

	margin:5px 5px 5px 0;

}

.row{

text-align:center;
margin:40px;

}

</style>

<?php
if(isset($_SESSION['loginusername'])){

	echo "<meta http-equiv='refresh' content='0;url=admin.php'>";

}else{

// check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// check username entered
	if(empty($_POST['loginusername'])){
		$enterValidUsername = "<span style='color:red;'>&#x2a;</span>";
	}else{
		$loginusername = $_POST['loginusername'];
	}

	// check password entered
	if(empty($_POST['loginpassword'])){
		$enterValidPassword = "<span style='color:red;'>&#x2a;</span>";
	}else{
		$loginpassword = $_POST['loginpassword'];	
	}

	// check if user exists in database
	include 'connect.php';
	$query = "SELECT username, password FROM users WHERE username='$loginusername'";
	$result = mysqli_query($conn, $query) or die();

	if($numrows!==0){
		while($row = mysqli_fetch_assoc($result)){
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}	
		if($loginusername==$dbusername && md5($loginpassword)==$dbpassword){
			$_SESSION['loginusername'] = $loginusername;
			echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
		}
		else{
			if(!empty($loginusername) && !empty($loginpassword)){
				$usernameOrPasswordInCorrect = "Username or Password is incorrect";
			}
		}
	}
}

?>
<html>
	<?php include 'bootstrap.php'; ?>
	<?php include 'stylesheets.php'; ?>
	<body>
	<div class="container">
		<div class="row">
			<h2>Admin Login</h2>
			<div class="loginBox">
			<form action="" method="post" id="loginUser" >
				<input class='login-username' type="text" name="loginusername" placeholder="Username" value="<?php echo $loginUsername ?>" >
				<?php echo "<div>" . $enterValidUsername . "</div>"; ?>
				<input class='login-password' type="password" placeholder="Password" name="loginpassword">
				<?php echo "<div>" . $enterValidPassword . "</div>"; ?>
				<?php echo "<div>" . $usernameOrPasswordInCorrect . "</div>"; ?>
			</form>
			<input class="login-button" type="submit" value="Login" form="loginUser">
			</div>
			<a class="back-to-guest-list" href="index.php"><p>&#8592; Back to Guest List</p></a>
		</div>
	</div>
	</body>
</html>

<?php

}

?>