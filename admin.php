<?php
session_start();
include "connection.php";
if (isset($_SESSION['admin'])) {
	header("location: adminhome.php");
}
if (isset($_POST['password']))  {
	$password = mysqli_real_escape_string($conn , $_POST['password']);
	$adminpass = '$2y$10$8WkSLFcoaqhJUJoqjg3K8eWixJWswsICf7FTxehKmx8hpmIKYWqju';
	if (password_verify($password , $adminpass)) {
		$_SESSION['admin'] = "active";
		header("Location: adminhome.php");
	}
	else {
		echo  "<script> alert('wrong password');</script>";
	}
}
?>
<html>
	<head>
		<title>PHP-kuiz</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>Kuiz App</h1>
				<a href="index.php" class="start">Home</a>

			</div>
		</header>
<hr>
		<main>
		<section>
			<div align="center">
							<form method="post" action="">
								<h2>Admin Login</h2>
								<br>
									<label>Email:</label>
									<input type="email" name="email" placeholder="Enter your email" required>
								<br>
									<label class="fw">Password:</label><br>
									<input type="password" name="password" placeholder="Enter your password" required>
							<br>
							<b><input type="submit" name="login" value="login"></b>
								<br>
		</form>
</div>
		</section>


		</main>
<hr>
		<footer>
			<div class="container">
				Copyright @ PHP-kuiz
			</div>
		</footer>

	</body>
</html>