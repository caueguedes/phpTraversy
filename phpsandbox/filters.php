<?php
	/*
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_REGEX
		FILTER_VALIDATE_URL

		FILTER_SANATIZE_EMAIL
		FILTER_SANATIZE_ENCODED
		FILTER_SANATIZE_NUMBER_FLOAT
		FILTER_SANATIZE_NUMBER_INT
		FILTER_SANATIZE_SPECIAL_CHARS
		FILTER_SANATIZE_STRING
		FILTER_SANATIZE_URL
	*/

	#Check for posted data
	/*
	if(filter_has_var(INPUT_POST, 'data')){
		echo 'Data Found';
	}else{
		echo "No Data";
	}
	*/

	/*
	if(filter_has_var(INPUT_POST, 'data')){
		$email = $_POST['data'];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		echo "$email <br>";

		if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
			echo 'Email is valid';
		}else{
		echo "Email is not valid";
		}
	}
	*/

	$arr = array(
		"name" => "brad traversy",
		"age" => "19",
		"email" => "brad@gmail.com"
	);


	$filters = array(
		'name' => array(
			'filter' => FILTER_CALLBACK,
			'options' => 'ucwords', 
		),
		'age' => array(
			'filter' => FILTER_VALIDATE_INT,
			'options' => array(
				'min_range' => 1,
				'max_range' => 130,
			),
		), 
		'email' => FILTER_VALIDATE_EMAIL
	);

	print_r(filter_var_array($arr, $filters));



	$filters = array(
		'data' => FILTER_VALIDATE_EMAIL,
		'data2' => array(
			'filters' => FILTER_VALIDATE_INT,
			'options' => array(
				'min_range' => 1,
				'max_range' => 100
			),
		),
	);

	print_r(filter_input_array(INPUT_POST, $filters));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">
	<input type="text" name="data2">
	<button type="submit">Submit</button>
</form>