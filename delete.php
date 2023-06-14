<?php session_start(); ?>
<?php include "connection.php";
if (isset($_SESSION['admin'])) {
	?>

<?php 
if (isset($_GET['qno'])) {
	$qno = mysqli_real_escape_string($conn , $_GET['qno']);
	if (is_numeric($qno)) {
		$query = "SELECT * FROM questions WHERE qno = '$qno' ";
		$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if (mysqli_num_rows($run) > 0) {
			while ($row = mysqli_fetch_array($run)) {
				 $qno = $row['qno'];
                 $question = $row['question'];
                 $ans1 = $row['ans1'];
                 $ans2 = $row['ans2'];
                 $ans3 = $row['ans3'];
                 $ans4 = $row['ans4'];
                 $correct_answer = $row['correct_answer'];
			}
		}
		else {
			echo "<script> alert('error');
			window.location.href = 'allquestions.php'; </script>" ;
		}
	}
	else {
		header("location: allquestions.php");
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP-Kuiz</title>
		<link rel="stylesheet" type="text/css" href="edit.css">
        <style>
            p{
text-align:center;
            }
            input{
                width:100px;
            }
            </style>
	</head>

	<body>
		<header>
			<div class="container">
				<h1>PHP-Kuiz</h1>
				<a href="index.php" class="start">Home&nbsp;&nbsp;</a>
				<a href="add.php" class="start">Add Question&nbsp;&nbsp;</a>
				<a href="allquestion.php" class="start">All Questions&nbsp;&nbsp;</a>
				<a href="exit.php" class="start">Logout&nbsp;&nbsp;</a>
				
			</div>
		</header><hr>
<hr>sss
<p>Are you sure do u want to delete this Question.
<input type="submit" name="delete" value="delete"> </p>
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