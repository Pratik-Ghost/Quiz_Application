<?php
session_start();
include "connection.php";
?>

<?php 
if (isset($_POST[''])) {
	header("location: home.php");
}
?>

<?php 
if (isset($_SESSION['id'])) {
	header("location: home.php");
}
?>
<?php
if (isset($_POST['email'])) {
$email = mysqli_real_escape_string($conn , $_POST['email']);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$checkmail = "SELECT * from users WHERE email = '$email'";
	$runcheck = mysqli_query($conn , $checkmail) or die(mysqli_error($conn));
	if (mysqli_num_rows($runcheck) > 0) {
		$played_on = date('Y-m-d H:i:s');
		$update = "UPDATE users SET played_on = '$played_on' WHERE email = '$email' ";
		$runupdate = mysqli_query($conn , $update) or die(mysqli_error($conn));
		$row = mysqli_fetch_array($runcheck);
			$id = $row['id'];
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $row['email'];
		header("location: home.php");
	}
	else {
		$played_on = date('Y-m-d H:i:s');
	$query = "INSERT INTO users(email,played_on) VALUES ('$email','$played_on')";
	$run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
	if (mysqli_affected_rows($conn) > 0) {
		$query2 = "SELECT * FROM users WHERE email = '$email' ";
		$run2 = mysqli_query($conn , $query2) or die(mysqli_error($conn));
		if (mysqli_num_rows($run2) > 0) {
			$row = mysqli_fetch_array($run2);
			$id = $row['id'];
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $row['email'];
			header("location: home.php");
		}
}
	else {
		echo "<script> alert('something is wrong'); </script>";
	}
}
}
else {
	echo "<script> alert('Invalid Email'); </script>";
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
				<h1>Kuiz App</h1>	
				<a href="index.php" class="start">Home&nbsp;&nbsp;</a>
				<a href="admin.php" class="start">Admin login</a>
				
				
		</header><br><hr>
		<main>
		<section>
			<div align="center">
							<form method="post" action="">
							<!-- <img src="avatar2.png" alt="Avatar" class="avatar"> -->
								<h2>Register</h2>
								<br>
									<label>Email:</label>
									<input type="email" name="email" placeholder="Enter your email" required>
					
									<label>Password:</label><br>
									<input type="password" name="password" placeholder="Enter your password" required>
							
							<b><input type="submit" name="submit" value="register"></b>
						
								<br>

									<!-- <span class="text-muted">Don't have an account?</span> <a href="register.php">Register</a> Here.. -->
		</form>
</div>
		</section>
		</main>
		<hr>
		<footer>
			<div class="container">
				Copyright @ PHP-Kuiz App
			</div>
		</footer>
	</body>
</html>


