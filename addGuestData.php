<!DOCTYPE html>
<?php

include 'connect.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$event = mysqli_real_escape_string($conn, $_POST['event']);
$occasion = mysqli_real_escape_string($conn, $_POST['occasion']);
$comments = mysqli_real_escape_string($conn, $_POST['comments']);

// default value status set to disapproved - (2)
$status = mysqli_real_escape_string($conn, "2");
$flaggedWords = false;

$query = "SELECT restrict_word FROM restrict_language";
$fetch = mysqli_query($conn, $query) or die();
while($row = mysqli_fetch_assoc($fetch)){

	// check if restricted words are present in comment
	$matchword = "\"". $row['restrict_word'] . "\"";
	if(preg_match( $matchword, $comments)){
		$status = mysqli_real_escape_string($conn, "3");
		break;
	}
}

$query = "INSERT INTO guest_book (guest_name, date_of_event, place_of_event, occasion, guest_comments, comment_status) VALUES ('" . $name . "','" . $date . "','" . $event . "','" . $occasion . "','" . $comments . "','". $status ."')";
$fetch = mysqli_query($conn, $query) or die();
mysqli_close($conn);

echo "<b style='color:green;'>Comment has been added, please wait 24 hours for approval</b>";


?>