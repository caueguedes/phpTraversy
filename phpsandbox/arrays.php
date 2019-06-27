<?php 
	/*
		- Indexed
		- Associative
		- Multi-dimensional	
	*/

	//Indexed
	$people = array('Kevin', 'Jeremy', 'Sara');
	$cars = ['Honda', 'Toyota', 'Ford'];
	$people[] = 'Caue';


	//Associative
	$people = array('Brad' => 35, 'Jose' => 32, 'Willian' => 37);
	$people['Caue'] = 27;

	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Nissan', 10, 15),
	);

 	// print_r($people);
 	// var_dump($people);
 	echo $people;
 ?>