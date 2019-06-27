<?php
	#DATE
	/*
		- d day
		- m month
		- Y year
		- l day of week 
		
		h - hour
		i - min
		s - second
		a - AM PM
	*/

	#TIME ZONE
	date_default_timezone_set('America/Sao_paulo' );
	// echo date('d/m/Y h:i:sa');

	#TIMESTAMP
	$timestamp = mktime(10, 14, 54, 9, 10, 1981);
	echo "TimeStamp $timestamp<br>";
	echo date('d/m/Y h:i:sa', $timestamp);

	#STR TO TIME
	$timestamp2 = strtotime('7:00pm March 22 2016');
	// $timestamp2 = strtotime('next sunday');
	// $timestamp2 = strtotime('+2 Months');
	echo "<br>Time $timestamp2<br>";
	echo date('d/m/Y h:i:sa', $timestamp2);


?>