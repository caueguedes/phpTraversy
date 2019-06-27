<?php
	/*if(isset($_GET['name'])){
		$name = htmlentities($_GET['name']);
		print_r($_GET);
	}
	
	if(isset($_POST['name'])){
		$name = htmlentities($_POST['name']);
		$email = htmlentities($_POST['email']);
		echo "Nome: $name <br> Email: $email";
	}
	
	if(isset($_REQUEST)){
		$name = htmlentities($_REQUEST['name']);
		$email = htmlentities($_REQUEST['email']);
		echo "Nome: $name <br> Email: $email";
	}
	*/

	echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="GET" action="get_post.php">
			
			<div>
				<label>Name</label><br>
				<input type="text" name="name"><br>
					
				<label>Email</label><br>
				<input type="text" name="email"><br>
			</div>
			<input type="submit" name="Submit">

		</form>
		
	</div>
</body>
</html>


