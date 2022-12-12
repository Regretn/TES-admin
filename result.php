<?php
include './function/conn.php';
include './function/session.php';
if (isset($_POST['add'])) {

	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$student_number = $_POST['student_number'];
	$year = $_POST['year'];
	$section = $_POST['section'];

	$insert = "insert into student (name,user_name,password,student_number,year,section) values ('$name','$user_name','$password','$student_number','$year','$section')";

	if ($conn->query($insert) == TRUE) {

		echo "Sucessfully add data";
		header('location:students.php');
	} else {

		echo "Ooppss cannot add data" . $conn->connect_error;
		header('location:students.php');
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
				<th>Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Student Number</th>
				<th>Year</th>
				<th>Section</th>
				<th>Action</th>
			</tr>
			<?php

			if (isset($_GET['search'])) {
				$query = $_GET['query'];

				$sql = "select * from student where name like '%$query%' or student_number like '%$query%'";

				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row1 = $result->fetch_array()) {
						$name = $row1['name'];
						$user_name = $row1['user_name'];
						$password = $row1['password'];
						$student_number = $row1['student_number'];
						$year = $row1['year'];
						$section = $row1['section'];


			?>
						<tr>
							<td align="center"><?php echo $name; ?></td>
							<td align="center"><?php echo $user_name; ?></td>
							<td align="center"><?php echo $password; ?></td>
							<td align="center"><?php echo $student_number; ?></td>
							<td align="center"><?php echo $year; ?></td>
							<td align="center"><?php echo $section; ?></td>
							<td align="center"><a href="./function/edit.php?id=<?php echo md5($row1['id']); ?>">Edit
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