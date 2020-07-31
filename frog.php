<?php 
	
	class Frog extends Animal{
		public 	$jump;

		public function __construct($jump="hop hop"){
			$this->jump = $jump;
		}

		public function jump(){
			return "{$this->jump}";
		}


	}


 ?>