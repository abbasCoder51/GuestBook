<!DOCTYPE html>
<?php

include 'connect.php';
include 'bootstrap.php';
include 'stylesheets.php';

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<div style="margin-bottom:15px;" class="container">
<h1 style="text-align:center;">Guest Book</h1>
<p style="text-align:center;">

<a href="addGuestComment.php"><button>Add Guest Here</button></a>
<a href="login.php"><button>Admin Login</button></a>

</p>

<?php

$query = "SELECT id, guest_name, date_of_event, place_of_event, occasion, guest_comments FROM guest_book WHERE comment_status='1'";
$fetch = mysqli_query($conn, $query) or die();

while($row = mysqli_fetch_assoc($fetch)){
	
	echo "<div class='publicCommentBox'>";
	echo "<div class='row'>";
	echo "<div class='col-sm-6 publicCommentName'>" . $row["guest_name"]  . "</div>";
	echo "<div class='col-sm-6 publicCommentDate'>" . date('D d M Y',strtotime($row["date_of_event"]))  . "</div>";
	echo "</div>";
	echo "<div class='row'>";
	echo "<div class='col-sm-12 publicCommentLocation'>" . $row["place_of_event"]  . "</div>";
	echo "</div>";
	echo "<div class='row'>";
	echo "<div class='col-sm-12 publicCommentOccasion'>" . $row["occasion"]  . "</div>";
	echo "</div>";
	echo "<div class='row'>";
	echo "<div class='col-sm-12 publicCommentNote'>" . $row["guest_comments"]  . "</div>";
	echo "</div>";
	echo "</div>";

}

?>

</div>