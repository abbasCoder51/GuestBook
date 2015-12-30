<?php

$guestPostDetails = new ArrayObject();	

	class GuestDetails{

		private $guestId;
		private $guestName;
		private $guestDate;
		private $guestEvent;
		private $guestOccasion;
		private $guestComments;
		private $guestStatus;
		
		public function __construct($enterGuestId, $enterGuestName, $enterGuestDate, $enterGuestEvent, $enterGuestOccasion, $enterGuestComments, $enterGuestStatus){
			$this->guestId = $enterGuestId;
			$this->guestName = $enterGuestName;
			$this->guestDate = $enterGuestDate;
			$this->guestEvent = $enterGuestEvent;
			$this->guestOccasion = $enterGuestOccasion;
			$this->guestComments = $enterGuestComments;
			$this->guestStatus = $enterGuestStatus;
		}	

		public function getGuestId(){
			return $this->guestId;
		}

		public function getGuestName(){
			return $this->guestName;
		}

		public function getGuestDate(){
			return $this->guestDate;
		}
		
		public function getGuestEvent(){
			return $this->guestEvent;
		}

		public function getGuestOccasion(){
			return $this->guestOccasion;
		}

		public function getGuestComments(){
			return $this->guestComments;
		}

		public function getGuestStatus(){
			return $this->guestStatus;
		}

	}

?>

