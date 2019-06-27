<?php 
	if(isset($_POST['submit'])){
		session_start();

		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		header('Location: page2.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
 	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

 		<input type="text" name="name" placeholder="Nome"><br>
 		<input type="text" name="email" placeholder="Email"><br>
 		<input type="submit" name="submit" value="Submit">
 	</form>
</body>
</html>