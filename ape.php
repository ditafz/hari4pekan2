<?php 

	class Ape extends Animal{
		public $yell;

		public function __construct($yell="Auooo"){
			$this->yell = $yell;
		}

		public function yell(){
			return "{$this->yell}<br>";
		}
	}

 ?>