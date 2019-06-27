<?php
	$str = 'Hello World';
	/*
	#Substring()
	$output = substr($str, 6);
	echo $output;

	#strlen()
	echo strlen($str);

	#strpos() First match
	echo strpos($str, 'o');

	#strrpos() Last match
	echo strrpos($str, 'o');

	#trim
	echo var_dump(trim('Hello World       '));

	#strupper
	echo strtoupper($str);

	#Capitalize
	echo ucwords($str);

	#str_replace
	echo str_replace('World', 'Everyone', $str);

	#is_string
	echo (is_string('22'));

	$values = array(true, false, null, 'abc', 33, '33', 22.3, '22.3', '', 0, '0');

	foreach ($values as $value) {
		if (is_string($value)) {
			echo "$value is a string<br>";
		}
	}

	*/

	#gzCompress
	$compressed = gzcompress('testo muito grande aqui... testo muito grande aqui... testo muito grande aqui... testo muito grande aqui...');
	echo $compressed;
	echo gzuncompress($compressed);
?>
