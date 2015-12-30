<h1>GuestBook</h1>
<p>
	A guestbook to let visitors of a website submit messages, messages can then be viewed on the website but only when approved
	by the administrator. The comments added by visitors can be approved, disapproved, flagged or deleted. Session functionality 
	included to allow for the administrator not to have to login every time<br/>
	PHP, Bootstrap, HTML5 valid and responsive to different screen sizes.
</p>

<h2>Program Breakdown</h2>
<h3>index.php</h3>
<p>
	Submitted comments can be viewed on this page, layout of comment includes person's name, event date, event location, occasion and comment.<br/>
	Navigation To:<br/>
	* Add Guest Here
	* Admin Login
</p>

<h3>addGuestComment.php</h3>
<p>
	To add guest comments to main page, all fields need to be filled in. It's possible to navigate to main page by link outside the box.
</p>

<h3>login.php</h3>
<p>
	Administrator needs to fill in their credentials to access admin area. 
</p>

<h3>admin.php</h3>
<p>
	Dashboard items can be seen, status is given to show:<br/>
	*Total Posts
	*Approved Posts
	*Disapproved Posts
	*Flagged Posts
	<br/>
	The overview area shows the comments in a table view, the statuses can be changed by selecting the drop down menu. The statuses that can be selected
	are approved, disapproved, flagged. When comments are added to the system for the first time, they are set as default. If comments are defined as 
	flagged, this means that some of the words in comments are inappropriate. Also, comments can be deleted.<br/>
	Note: There is no notification of deleting comments so be careful before deleting. Also when table is shown in mobile view, the table can be scrolled 
	sideways. 
</p>

<h3>Further Development</h3>
<p>Flagged dictionary is present but can't be viewed on admin page, restricted words include 'hate', 'idiot'</p>

[Demo](http://abbas-c.info/index.php)