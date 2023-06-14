<?php 
session_start();
if (isset($_SESSION['admin'])) {
?>




<!DOCTYPE html>
<html>
	<head>
		<title>PHP-Kuiz</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>PHP-kuiz</h1>
				<a href="index.php" class="start">Home&nbsp;&nbsp;</a>
				<a href="addQ.php" class="start">Add Question&nbsp;&nbsp;</a>
				<a href="allquestion.php" class="start">All Questions&nbsp;&nbsp;</a>
				<a href="players.php" class="start">Players&nbsp;&nbsp;</a>
				<a href="logout.php" class="start">Logout&nbsp;&nbsp;</a>

			</div>
		</header>
<hr>
		<main>
			<div class="container">
				<h2 style="margin-bottom:450px;">Welcome back, Admin</h2>
				</div>
				</main>
				<hr>
		<footer>
			<div class="container">
				Copyright @ PHP-kuiz
			</div>
		</footer>
				</body>
				</html>

				<?php } 
				else {
				header("location: admin.php");
				}
				?>