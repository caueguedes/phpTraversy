<?php
	$loggedIn = true;
	/*
	if($loggedIn){
		echo "You are logged in";
	}else{
		echo "You are not logged in";
	}
	*/
	echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

	
	$age = 20;
	$score = 15;

	echo "<br>Your score is: ".($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional' ) : ($age > 10? 'Horrible': 'Average'));

?>