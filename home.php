<?php
include './function/session.php';
$username = $_SESSION['username'];
$userID = $_SESSION['userID'];
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<title>
		TES Admin
	</title>
</head>

<body>
	<div id="body">
		<div id="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="students.php">Students</a></li>
				<li><a href="teachers.php">Teachers</a></li>
				<li><a href="score.php">Scores</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>

		<div id="content">

			<h1>Welcome <?php echo $username; ?></h1>
			<h3 style="color:blue;"><?php echo "Today is" .  "  " . date("M/d/y") . " - " . date("l") . "" ?>&nbsp; <?php echo "" . date("h:i:sa") . "" ?></h3>

			<hr style="border:1px solid red;">

			<?php //COUNTER for STUDENTS


			$databaseHost = 'localhost';   //your db host 
			$databaseName = 'tes_db';  //your db name 
			$databaseUsername = 'root';    //your db username 
			$databasePassword = ''; //   db password 

			$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


			$sql = "SELECT * FROM student";

			$mysqliStatus = $mysqli->query($sql);

			$rows_count_value = mysqli_num_rows($mysqliStatus);

			echo "Total Students <br>  $rows_count_value<br>";



			$mysqli->close();
			?>

			<?php //COUNTER for Teachers


			$databaseHost = 'localhost';   //your db host 
			$databaseName = 'tes_db';  //your db name 
			$databaseUsername = 'root';    //your db username 
			$databasePassword = ''; //   db password 

			$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


			$sql = "SELECT * FROM teacher";

			$mysqliStatus = $mysqli->query($sql);

			$rows_count_value = mysqli_num_rows($mysqliStatus);

			echo "Total Teachers <br>  $rows_count_value<br>";



			$mysqli->close();
			?>


		</div>


	</div>
</body>

</html>