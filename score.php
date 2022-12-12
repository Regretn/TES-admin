<?php
include './function/conn.php';
include './function/session.php';

if (isset($_POST['add'])) {


	$teacher_id = $_POST['teacher_id'];
	$student_id = $_POST['student_id'];

	$insert = "insert into score (student_id,teacher_id) values ('$student_id','$teacher_id')";

	if ($conn->query($insert) == TRUE) {

		echo "Sucessfully add data";
		header('location:score.php');
	} else {

		echo "Ooppss cannot add data" . $conn->connect_error;
		header('location:score.php');
	}
}

?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<title>
		Score Management
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
			<form action="score_result.php" method="get" ecntype="multipart/data-form">
				<table align="center">
					<tr>
						<td>Search: <input type="text" name="query"><input type="submit" value="Search" name="search"></td>
					</tr>
				</table>
			</form>
			<br>
			<table align="center" border="1" cellspacing="0" width="1000">
				<tr>
					<th>Teacher ID</th>
					<th>Student ID</th>
				</tr>
				<?php
				$sql = "SELECT * FROM score";
				$show = $conn->query($sql);
				if ($show->num_rows > 0) {
					while ($row = $show->fetch_array()) {
				?>
						<tr>
							<td align="center"><?php echo $row['student_id']; ?></td>
							<td align="center"><?php echo $row['teacher_id']; ?></td>
						</tr>
				<?php
					}
				} else {
					echo "<center><p> No Records</p></center>";
				}

				$conn->close();
				?>
			</table>
		</div>
	</div>
</body>

</html>