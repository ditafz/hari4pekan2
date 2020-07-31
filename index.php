<?php 

	require('animal.php');
	require('frog.php');
	require('ape.php');

	//REALESE 0
	$sheep = new Animal("shaun");
	echo $sheep->getDefaultProperty();

	//REALESE 1
	//$sungokong = new Ape("kera sakti");
	//echo $sungokong->getDefaultProperty();

	$sungokong = new Ape();
	echo $sungokong->yell(); // "Auooo"

	//$kodok = new Frog("buduk", 4, "false");
	//echo $kodok->getDefaultProperty();

	$kodok = new Frog("buduk");
	echo $kodok->jump(); // "hop hop"

 ?>