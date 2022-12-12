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
		Student Management
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
				<li><a href="student_add.php">Add Student</a></li>
			</ul>
		</div>

		<form action="result.php" method="get" ecntype="multipart/data-form">
			<table align="center">
				<tr>
					<td>Search: <input type="text" name="query"><input type="submit" value="Search" name="search"></td>
				</tr>
			</table>
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
				$sql = "SELECT * FROM student";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_array()) {
				?>
						<tr>
							<td align="center"><?php echo $row['name']; ?></td>
							<td align="center"><?php echo $row['user_name']; ?></td>
							<td align="center"><?php echo $row['password']; ?></td>
							<td align="center"><?php echo $row['student_number']; ?></td>
							<td align="center"><?php echo $row['year']; ?></td>
							<td align="center"><?php echo $row['section']; ?></td>
							<td align="center"><a href="./function/edit.php?id=<?php echo md5($row['id']); ?>">Edit
								</a><a href="./function/delete.php?id=<?php echo md5($row['id']); ?>">Delete</a></td>
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