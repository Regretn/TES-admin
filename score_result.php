<?php
include './function/conn.php';
include './function/session.php';
if (isset($_POST['add'])) {

	$teacher_id = $_POST['teacher_id'];
	$student_id = $_POST['student_id'];

	$insert = "insert into score (teacher_id,student_id) values ('$teacher_id','$student_id')";

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
		TES Admin
	</title>
</head>

<body bgcolor="green">
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
		</form>
		<br>
		<table align="center" border="1" cellspacing="0" width="500">
			<tr>
				<th>Student ID</th>
				<th>Teacher ID </th>
			</tr>
			<?php

			if (isset($_GET['search'])) {
				$query = $_GET['query'];

				$sql = "select * from score where student_id like '%$query%'";

				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row1 = $result->fetch_array()) {
						$teacher_id = $row1['teacher_id'];
						$student_id = $row1['student_id '];


			?>
						<tr>
							<td align="center"><?php echo $teacher_id; ?></td>
							<td align="center"><?php echo $student_id; ?></td>
							<td align="center"><a href="./function/?php echo md5($row1['id']); ?>">Edit
								</a><a href="./function/?php echo md5($row1['id']); ?>">Delete</a></td>
						</tr>
			<?php

					}
				} else {
					echo "<center>No records</center>";
				}
			}
			$conn->close();
			?>
		</table>
	</div>
	</div>
</body>

</html>