<?php require("login.class.php") ?>
<?php 
	session_start();
	if(isset($_SESSION['user'])){
		header("location: account.php");	exit();
	}
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['login'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Log in form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="/script.js"></script>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Login form</h2>

		<label>Login</label>
		<input type="text" name="login">

		<label>Password</label>
		<input type="password" name="password">

		<button type="submit" name="submit">Log in</button>

		<p class="error"><?php echo $user->error ?></p>
		<p class="success"><?php echo $user->success ?></p>
	</form>

</body>
</html>