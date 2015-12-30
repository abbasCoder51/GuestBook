<style>
	
	body{background-color:#E8E8E8;}

	/* Login Page Styling */

	.login-username{
		width:80%;
		padding:2px 0 2px 10px;
	}
	.login-password{
		width:80%;
		padding:2px 0 2px 10px;
		margin:5px 0 0 0;
	}
	.login-button{
		width:80%;
		padding:0 10% 0 10%;
		height:35px;
		font-size:17px;
	}

	@media (max-width:500px){
		.loginBox{

			width:80%;
			background-color:#C4C4C4;
			padding:20px 0 20px 0;
			margin:0 10% 0 10%;
			border:1px solid #ADADAD;

		}
	}

	@media (min-width:501px){
		.loginBox{

			width:340px;
			background-color:#C4C4C4;
			padding:20px 0 20px 0;
			margin-right:auto;
			margin-left:auto;
			border:1px solid #ADADAD;

		}
	}

	/* Login Page End Styling */

	
	/* Enter Details Styling*/
	@media(min-width:600px){
	.enterDetailsBox{
		width:450px;
		margin-right:auto;
		margin-left:auto;
	}
	}
	@media(max-width:601px){
	.enterDetailsBox{
		width:80%;
		margin-right:10%;
		margin-left:10%;
	}	
	}

	.enterDetailsBox{
		background-color:#fff;
	}	

	.enterDetailsBox input, .enterDetailsBox textarea{
		width:80%;
		margin:2px 10% 2px 10%;
	}
	
	.enterDetailsBox input:nth-child(1){
		margin-top:20px;
	}

	.enterDetailsBox textarea{
		margin-bottom:5px;
		resize:none;
	}
	
	#letterCounter{
		text-align:right;
		margin-right:10%;
	}

	.enterDetailsBox textarea{
		height:80px;
	}

	.row .enterDetailsBox .postComment{
		margin:5px 10% 15px 10%;
		width:80%;
	}

	.guestBookRow{
		text-align:center;
	}

	.guestBookRow a{
		margin:5px 0 5px 0;
	}

	@media (max-width:990px){

		.guestListItems{
			overflow-x:scroll;
		}

	}

	@media (min-width:1200px){
		.guestListItems{
			width:1170px;
		}
	}

	@media (min-width:1000px) and (max-width:1199px){
		.guestListItems{
			width:970px;
		}
	}

	@media (min-width:797px) and (max-width:990px){
		.guestListItems{
			width:750px;
		}
	}
	

	/* End Enter Details Styling*/
	
	
	/* Public Comments Display Styling */

	@media (min-width:769px){

		.publicCommentBox{
			width:700px;
			margin-right:auto;
			margin-left:auto;
			background-color:#fff;
			margin-bottom:10px;
		}
		.publicCommentDate{
			font-weight:600;
			text-align:right;
			padding:10px 25px 0 0;
		}

	}

	@media (max-width:768px){

		.publicCommentBox{
			width:100%;
			background-color:#fff;
			margin-bottom:10px;
		}
		.publicCommentDate{
			font-weight:600;
			text-align:left;
			padding:0 0 0 25px;
		}

	}
	
	.publicCommentName{
		font-weight:600;
		padding:10px 0 0 25px;
	}
	.publicCommentLocation, .publicCommentOccasion{
		font-style:italic;
		padding:0 0 0 25px;
	}
	.publicCommentNote{
		padding:10px 10px 10px 25px;
	}

	/* End Styling */
	
	
	.dashboard-item-names span:nth-child(1){font-size:25px;margin-right:5px;}
	.dashboard-item-names span:nth-child(2){font-size:25px;}
	

	/* dashboard styling */ 
	.col-md-3{padding:0 0 0 0;}

	
	.row .dash-board-item:nth-child(1) .dash-board-item-box{color:#fff;background-color:#7273AB;padding:10px 0 10px 0;}
	.row .dash-board-item:nth-child(2) .dash-board-item-box{color:#fff;background-color:#76B85C;padding:10px 0 10px 0;}
	.row .dash-board-item:nth-child(3) .dash-board-item-box{color:#fff;background-color:#AB5454;padding:10px 0 10px 0;}
	.row .dash-board-item:nth-child(4) .dash-board-item-box{color:#fff;background-color:#5479AB;padding:10px 0 10px 0;}

	.row .dash-board-item:nth-child(1) h2{font-size:25px;text-align:center;}
	.row .dash-board-item:nth-child(2) h2{font-size:25px;text-align:center;}
	.row .dash-board-item:nth-child(3) h2{font-size:25px;text-align:center;}
	.row .dash-board-item:nth-child(4) h2{font-size:25px;text-align:center;}

	.row .dash-board-item:nth-child(1) p{font-size:45px;text-align:center;}
	.row .dash-board-item:nth-child(2) p{font-size:45px;text-align:center;}
	.row .dash-board-item:nth-child(3) p{font-size:45px;text-align:center;}
	.row .dash-board-item:nth-child(4) p{font-size:45px;text-align:center;}

	
	.row .dash-board-item:nth-child(1) p span{padding:0 5px 0 0;}
	.row .dash-board-item:nth-child(2) p span{padding:0 5px 0 0;}
	.row .dash-board-item:nth-child(3) p span{padding:0 5px 0 0;}
	.row .dash-board-item:nth-child(4) p span{padding:0 5px 0 0;}

	@media (max-width:991px){

		.row .dash-board-item:nth-child(1) .dash-board-item-box{margin:10px 0 10px 0;}
		.row .dash-board-item:nth-child(2) .dash-board-item-box{margin:10px 0 10px 0;}
		.row .dash-board-item:nth-child(3) .dash-board-item-box{margin:10px 0 10px 0;}
		.row .dash-board-item:nth-child(4) .dash-board-item-box{margin:10px 0 10px 0;}

	}

	.admin-container{
		margin-top:10px;
	}

	.admin-container form input{
		float:right;
	}

	hr{
		border:1px solid #C4C4C4;
	}

	.dashboard-items-rows{
		margin-right:0px;
		margin-left:0px;
	}
	
	@media(min-width:800px){	
	
		.container{
			padding-right:0px;
			padding-left:0px;
		}

		.row{
			margin-right:0px;
			margin-left:0px;
		}

	}
	
	/* end dashboard styling */

	/* Guest List Styling */
	
	.table-responsive{width:100%;background-color:#D6D6D6;}
	.table-responsive thead tr{border-bottom:2px solid #878787;font-style:italic;font-size:17px;font-weight:600;}
	.table-responsive tbody tr td{border-bottom:1px solid #878787;}
	.table-responsive tr td{padding:10px 20px 10px 20px;}
	.table-responsive tr td:nth-child(n+1):nth-child(-n+5){border-right:1px dashed #878787;}
 	.guestNameStyle{font-weight:700;}
	.form-control{width:auto;}

	@media (min-width:851px){
		table-responsive{
			width:100%;
		}
	}

	.glyphicon-list{
		font-size:20px;
		margin-right:10px;
	}

	.list-overview-heading{
		font-size:23px;
	}

</style>