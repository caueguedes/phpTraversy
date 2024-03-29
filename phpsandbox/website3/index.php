<?php
	// Message vars
	$msg = '';
	$msgClass = '';

	#Check for submit
	if(filter_has_var(INPUT_POST, 'submit')){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		//Check required fields
		if (!empty($email) && !empty($name) && !empty($message)) {
			//Passed
			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

				$msg = "Porfavor preencher campo email";
				$msgClass = 'alert-danger';

			} else {
				$toEmail = 'caue.guedes91@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2> Contact Request </h2><br>
						<h4>Name </h4><p>'.$name.'</p>
						<h4>Email </h4><p>'.$email.'</p>
						<h4>Message </h4><p>'.$message.'</p>';
 
				$headers = 'MIME-Version: 1.0'."\r\n";
				$headers .= "Contet-Type:text/html; charset=UTF-8"."\r\n";
				$headers .= "From: ".$name."<".$meail.">"."\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					$msg = "Seu email foi enviado";
					$msgClass = 'alert-sucess';
				}else{
					$msg = "Seu email não foi enviado";
					$msgClass = 'alert-danger';
				}
			}
		} else {
			//Fail
			$msg = "Por favor preencha todos os campos";
			$msgClass = 'alert-danger';
		}
	};
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">	
<title></title>
</head>
<body>


	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"> My WebSite</a>
			</div>
		</div>
	</nav>

		

	<div class="container">
		<?php if($msg != '') : ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo "$msg"; ?> </div>
		<?php endif; ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
			</div>

			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
		
	</div>

</body>
</html>

