<?php 
	$user = ['name' => 'Frank', 'age' => 35, 'email' => 'frank@gmail.com'];

	$user = serialize($user);
	// echo $user; 

	setcookie('user', $user, time() + 3600);

	print_r( unserialize($_COOKIE['user']));

 ?>