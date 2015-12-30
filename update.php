<?php

	session_start();
	if(isset($_SESSION['loginusername'])){
	
		require 'connect.php';
		require 'getGuestDetails.php';
		$idNumber = intval($_GET['guestNumber']);
		$statusCommentId = intval($_GET['statusCommentId']);
		$statusCommentValue = intval($_GET['statusCommentValue']);
		
		if(!empty($idNumber)){

			$query = "DELETE FROM guest_book where id=" . mysqli_real_escape_string($conn,$idNumber);
			$fetch = mysqli_query($conn, $query) or die();

		}

		if(!empty($statusCommentId) && !empty($statusCommentValue)){

			$query = "UPDATE guest_book SET comment_status = '" . mysqli_real_escape_string($conn,$statusCommentValue) . "' WHERE id='" . mysqli_real_escape_string($conn,$statusCommentId)."'";
			$fetch = mysqli_query($conn, $query) or die();

		}

		// reload data into page
		$query = "SELECT * FROM guest_book inner join comment_status on guest_book.comment_status = comment_status.status_id";
		$fetch = mysqli_query($conn, $query) or die();

		// read data into object
		while($row = mysqli_fetch_assoc($fetch)){

		$guestDetailsObject = new GuestDetails($row["id"],$row["guest_name"],$row["date_of_event"],$row["place_of_event"],$row["occasion"],$row["guest_comments"],$row["status"]);
		$guestPostDetails->append(array('id' => $guestDetailsObject->getGuestId(),
			'name' => $guestDetailsObject->getGuestName(), 
			'event' => $guestDetailsObject->getGuestEvent(), 
			'date' => $guestDetailsObject->getGuestDate(), 
			'occasion' => $guestDetailsObject->getGuestOccasion(), 
			'comments' => $guestDetailsObject->getGuestComments(), 
			'status' => $guestDetailsObject->getGuestStatus()));
		}

		mysqli_close($conn);
	
		$postCounter = 0;
		$approvalCounter = 0;
		$disapprovalCounter = 0;
		$flagCounter = 0;

		foreach($guestPostDetails as $value){

			$postCounter += 1;
			switch($value['status']){

				case "approved":
					$approvalCounter+=1;
					break;
				case "disapproved":
					$disapprovalCounter+=1;
					break;
				case "flagged":
					$flagCounter+=1;
					break;
					
			}

		}
		
		echo "<div class='container dashboard-item-names'><span class='glyphicon glyphicon-dashboard'></span><span>DASHBOARD</span></div>";
		echo "<div class='container'><div class='row dashboard-items-blocks'>";
		echo "<div class='col-md-3 dash-board-item'><div class='dash-board-item-box'><h2>Total Posts</h2> <p><span class='glyphicon glyphicon-comment'></span>" . $postCounter . "</p></div></div>";
		echo "<div class='col-md-3 dash-board-item'><div class='dash-board-item-box'><h2>Approved Posts</h2> <p><span class='glyphicon glyphicon-ok'></span>" . $approvalCounter . "</p></div></div>";
		echo "<div class='col-md-3 dash-board-item'><div class='dash-board-item-box'><h2>Disapproved Posts</h2> <p><span class='glyphicon glyphicon-remove'></span>" . $disapprovalCounter . "</p></div></div>";
		echo "<div class='col-md-3 dash-board-item'><div class='dash-board-item-box'><h2>Flagged Posts</h2> <p><span class='glyphicon glyphicon-warning-sign'></span>" . $flagCounter . "</p></div></div>";
		echo "</div></div>";
		echo "<div class='container'><h2 class='list-overview-heading'><span class='glyphicon glyphicon-list'></span>OVERVIEW</h2></div>";
		echo "<div class='container'><div class='guestListItems'>";
		echo "<table class='table-responsive'>";
		echo "<thead><tr><td>Name/ Occasion</td><td>Location</td><td>Date</td><td>Comment</td><td>Status</td><td>Delete</td></tr></thead><tbody>";

		// print data from array object
		foreach($guestPostDetails as $value){
			$tableInfo = "<tr><td><span class='guestNameStyle'>". $value["name"] ."</span><br/>" . $value["occasion"] . "</td><td>" . $value["event"];
			$tableInfo = $tableInfo . " </td><td>" . $value["date"] . "</td><td>" . $value["comments"] . "</td><td><select id='" . $value["id"] . "_comment_id' onchange='changeCommentStatus(this);' class='form-control'>";

				switch($value["status"]){
					case "approved":
					$tableInfo = $tableInfo . "<option value='1' selected>Approved</option><option value='2' >Disapproved</option><option value='3' >Flagged</option>";
					break;
					case "disapproved":
					$tableInfo = $tableInfo . "<option value='1' >Approved</option><option value='2' selected>Disapproved</option><option value='3' >Flagged</option>";
					break;
					case "flagged":
					$tableInfo = $tableInfo . "<option value='1' >Approved</option><option value='2' >Disapproved</option><option selected value='3' >Flagged</option>";
					break;
				}


			$tableInfo = $tableInfo . "</select></td><td>";
			$tableInfo = $tableInfo . " <button type='button' class='btn btn-default btn-lg deleteMe' value='" . $value["id"] . "' onclick='deleteComment(" . $value["id"] . ");'>";
			$tableInfo = $tableInfo . "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button>" . "</td></tr>";
			echo $tableInfo;
		}

		echo "</tbody></table>";
		echo "</div></div>";

	}

?>