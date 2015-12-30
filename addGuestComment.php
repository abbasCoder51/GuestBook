<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php

include "bootstrap.php";
include "stylesheets.php";

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">

<script type="text/javascript">

function addGuestName(){

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
		document.getElementById('guestName').value = "";	
		document.getElementById('guestDate').value = "";	
		document.getElementById('guestEvent').value = "";
		document.getElementById('guestOccasion').value = "";
		document.getElementById('guestComments').value = "";
            }
        };

	guestName = document.getElementById('guestName').value;	
	guestDate = document.getElementById('guestDate').value;	
	guestEvent = document.getElementById('guestEvent').value;	
	guestOccasion = document.getElementById('guestOccasion').value;	
	guestComments = document.getElementById('guestComments').value;	

	if(guestName && guestDate && guestEvent && guestOccasion && guestComments){

		parameters = "name=" + guestName + "&date=" + guestDate + "&event=" + guestEvent;
		parameters += "&occasion=" + guestOccasion + "&comments=" + guestComments;
        	xmlhttp.open("POST","addGuestData.php",true);
		xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        	xmlhttp.send(parameters);

	}

}

function remainingLetters(remainingLetters){

	
	// if length of description more than 300, subtract from description
	if(document.getElementById("guestComments").value.length > 300){

		var description = document.getElementById("guestComments").value;
		document.getElementById("guestComments").value = description.substring(0,description.length-1);	
				
	}else{
		
		document.getElementById("lettersRemaining").innerHTML = (300 - remainingLetters.length);
	
	}
	
	

}

</script>

<div class="container">
	<div class="row guestBookRow">
	<h2>Enter Guestbook Comment</h2>
	<div class="enterDetailsBox">
		<input type="text" id="guestName" placeholder="Name" ><br/>
		<input type="date" id="guestDate" placeholder="Date"><br/>
		<input type="text" id="guestEvent" placeholder="Event Location" ><br/>
		<input type="text" id="guestOccasion" placeholder="Occasion" ><br/>
		<textarea id="guestComments" onkeyup="remainingLetters(this.value);" placeholder="Comment"></textarea><br/>
		<div id="letterCounter">Character Remaining: <span id="lettersRemaining">300</span></div>
		<button class="postComment" onclick="addGuestName();">Post Comment</button>
		<div id="listGuestData"></div>
	</div>
		<a href="index.php">&#8592; Back to Guest List</a>
	</div>

</div>
