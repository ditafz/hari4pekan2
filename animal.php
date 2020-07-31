<?php 

	class Animal{

		public 	$name,
				$legs,
				$cold_blooded;

		public function __construct($name="name", $legs=2, $cold_blooded="false"){
			$this->name = $name;
			$this->legs = $legs;
			$this->cold_blooded = $cold_blooded;
		}

		public function getDefaultProperty(){
			return "Name: {$this->name} <br> Legs: {$this->legs} <br> cold_blooded: {$this->cold_blooded}<br>";
		}

		public function getLegs(){
			return "{$this->legs}";
		} 
	}


 ?>