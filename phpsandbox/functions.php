<?php 
	#Functions
	function simpleFunction(){
		echo "Hello World";
	}

	//Params
	function sayHello($name = 'Unkown'){
		echo "Hello $name <br>";
	}

	//Return
	function addNumbers($num1, $num2){
		return $num1 + $num2;
	}

	//By Reference
	$myNum=1;
	function addFive(&$num){
		$num += 5;
	}
	addFive($myNum);

	echo $myNum;

	// sayHello();

 ?>