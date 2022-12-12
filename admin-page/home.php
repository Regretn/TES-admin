<?php
include '../function/conn.php';
include '../function/session.php';
$userID = $_SESSION['teacher_id'];
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
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="test.png">
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="students.php">
					<i class='bx bxs-group'></i>
					<span class="text">Student</span>
				</a>
			</li>
			<li>
				<a href="teachers.php">
					<i class='bx bxs-message-alt-dots'></i>
					<span class="text">Teacher</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			<li>
				<a href="../function/logout.php" class="logout">
					<i class='bx bxs-log-out'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	<?php include_once("../navbar/nav.php"); ?>
	<!-- This is the link for navbar -->


	<!-- THe content -->
	<div id="main-content">

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

	<script src="script.js"></script>

</body>

</html>