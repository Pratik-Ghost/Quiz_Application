<?php 
session_start();
include "connection.php";
if (isset($_SESSION['id'])) {
	?>
	<?php if(!isset($_SESSION['score'])) {
		header("location: questions.php?n=2");
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
				<h1>PHP-Kuiz</h1>
			</div>
		</header>

		<main style="text-align:center;">
			<div class= "container">
			<h2>Congratulations!</h2> 
				<p>You have successfully completed the Quiz</p>
				<p>Total points: <?php if (isset($_SESSION['score'])) {
echo $_SESSION['score']; 
}; ?> </p>
		<a href="questions.php?n=2" class="start">Play Again&nbsp;&nbsp;</a><br>
		<a href="home.php" class="start">Go Home</a>
		</div>
		</main>
		<hr>
		<footer>
			<div class="container">
			
				Copyright @ PHP-Kuiz App
			</div>
		</footer>
		</body>
		</html>

		<?php 
		$score = $_SESSION['score'];
		$email = $_SESSION['email'];
		$query = "UPDATE users SET score = '$score' WHERE email = '$email'";
		$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
 		?>


<?php unset($_SESSION['score']); ?>
<?php unset($_SESSION['time_up']); ?>
<?php unset($_SESSION['start_time']); ?>
<?php }
else {
	header("location: home.php");
}
?>
