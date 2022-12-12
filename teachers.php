<?php
include './function/conn.php';
include './function/session.php';

if (isset($_POST['add'])) {

	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$teacher_id = $_POST['teacher_id'];
	$subject = $_POST['subject'];
	$year = $_POST['year'];
	$date = $_POST['date'];

	$insert = "insert into teacher (name,user_name,password,teacher_id,subject,year,date) values ('$name','$user_name','$password','$teacher_id','$subject','$year','$date')";

	if ($conn->query($insert) == TRUE) {

		echo "Sucessfully add data";
		header('location:teachers.php');
	} else {

		echo "Ooppss cannot add data" . $conn->connect_error;
		header('location:teachers.php');
	}
}

?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<title>
		Teacher Management
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

		<a href="teacher_add.php">Add Teacher</a>

		<form action="teacher_result.php" method="get" ecntype="multipart/data-form">
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
					<th>Teacher ID</th>
					<th>Subject</th>
					<th>Year</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
				<?php
				$sql = "SELECT * FROM teacher";
				$show = $conn->query($sql);
				if ($show->num_rows > 0) {
					while ($row = $show->fetch_array()) {
				?>
						<tr>
							<td align="center"><?php echo $row['name']; ?></td>
							<td align="center"><?php echo $row['user_name']; ?></td>
							<td align="center"><?php echo $row['password']; ?></td>
							<td align="center"><?php echo $row['teacher_id']; ?></td>
							<td align="center"><?php echo $row['subject']; ?></td>
							<td align="center"><?php echo $row['year']; ?></td>
							<td align="center"><?php echo $row['date']; ?></td>
							<td align="center"><a href="teacher_edit.php?id=<?php echo md5($row['id']); ?>">Edit
								</a><a href="teacher_delete.php?id=<?php echo md5($row['id']); ?>">Delete</a></td>
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