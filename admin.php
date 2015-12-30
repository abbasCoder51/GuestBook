<?php session_start(); ?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">

function deleteComment(idNum){

	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("listGuestData").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","update.php?guestNumber="+idNum,true);
        xmlhttp.send();

}

function changeCommentStatus(status){

	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("listGuestData").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","update.php?statusCommentValue="+status.value+"&statusCommentId="+parseInt(status.id),true);
        xmlhttp.send();

}

</script>
<?php include 'bootstrap.php'; ?>
<?php include 'stylesheets.php'; ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// if user logged out, reset session login username and redirect to login screen
	if($_POST['logOut']){
		unset($_SESSION['loginusername']);
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
}

if(isset($_SESSION['loginusername'])){

	echo "<div class='container admin-container'>";	

	echo "<form method=\"post\" action=\"\">";

	// show welcoming message
	echo "<span> Welcome, <b>" . $_SESSION['loginusername'] ."</b></span>";
	echo "<input type=\"submit\" value=\"Log Out\" name=\"logOut\" >";
	echo "</form><hr />";
	
	echo "<div id='listGuestData'>";

	require 'update.php';

	echo "</div></div>";

}else{
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}

?>

