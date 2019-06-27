<?php  
	#CONDITIONALS
	/*
		== value
		=== identical
		<, >
		<=, >=
		!=
		!==	
	*/
	
	#LOGICAL OPERATORS
	/*
		and &&
		or ||
		xor
	*/

	#IF ELSE
	$favColor = 'red';
	if(!empty($favColor)){
		echo "Your favorite color is empty";
	}elseif ($favColor == 'red') {
		echo "Your favorite color is red";
	}

	#SWITCH
	#switch (variable) { case 'value': code...; break;	default: code...; break; }
	switch ($favColor) {
			case 'red':
				echo "Your favorite color is red";
				break;
			default:
				echo "Your favorite color is $favColor";
				break;
		}	
?>