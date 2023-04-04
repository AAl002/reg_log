<?php require("register.class.php") ?>
<?php
	session_start();
	if(isset($_SESSION['user'])){
		header("location: account.php");	exit();
	}
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['login'], $_POST['password'],$_POST['confirm_password'],$_POST['email'],$_POST['name']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Register form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="/script.js"></script>
</head>
<body>

<form method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Register form</h2>

		<label>Login</label>
		<input type="text" class="login" name="login">

		<label>Password</label>
		<input type="password" class="pass" name="password">

		<label>Confirm_Password</label>
		<input type="password" class="conpass" name="confirm_password">

		<label>Email</label>
		<input type="email" class="email" name="email">

		<label>Name</label>
		<input type="text" class="name" name="name">
    	<button type="submit" class="btn" name="submit">Register</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>