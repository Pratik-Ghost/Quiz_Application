<?php 
session_start();
include "connection.php";
if (isset($_SESSION['id'])) {
$query = "SELECT * FROM questions";
$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
$total = mysqli_num_rows($run);
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
<hr>
		<main>
			<div class="container">
				<h2>Welcome To PHP Kuiz User Page !</h2>
				<h4 style="text-align:center; color:blue;">This is just a simple quiz game to test your knowledge!</h4>
				<h1 style="text-align:center;">About Quiz :</h1>
				  <p style="text-align:center;"><strong>1:  &nbsp;Number of questions: </strong><?php echo $total; ?><br>
				  <br>
				  <strong>2:  Type:  &nbsp;</strong>Multiple Choice<br>
				  <br>
				  <strong>3:  &nbsp;Estimated time for each question: </strong><?php echo $total * 0.05 * 60; ?> seconds<br>
				  <br>
				  <strong>&nbsp;&nbsp;4:&nbsp;Score: </strong>&nbsp; +1 point for each correct answer<br>
				<br><a href="questions.php" class="start">Start&nbsp;Kuiz</a>
				<br>
				<a href="logout.php" class="add">Log out</a>
			</p>
			</div>
		</main>
<hr>
		<footer>
			<div class="container">
				Copyright @ PHP_kuiz
			</div>
		</footer>

	</body>
</html>
<?php unset($_SESSION['score']); ?>
<?php }
else {
	header("location: index.php");
}
?>