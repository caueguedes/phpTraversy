<?php 
	#Loops
	/*
		- For
		- While
		- Do..While
		- Foreach
	*/	

	//For
	# @params - init, condition, inc
		for($i = 0; $i <= 10; $i++){
			echo "Number $i";
			echo "<br>";
		}

	//While
	# @params - condition
	$i = 0;
	while ($i <= 10) {
		echo 'Number'.$i;
		echo "<br>";
		$i++;
	}

	#Do...While
	# @params - condition
	$i = 0;	
	do{
		echo $i;
		echo "<br>";
		$i++;
	}
	while ( $i <= 10);
 

	#Foreach
	$people = array('Kevin', 'Jeremy', 'Sara');
	// foreach ($people as $person => $valueFromKey) {
	foreach ($people as $person) {
		echo $person;
		echo "<br>";	
	}
 ?>