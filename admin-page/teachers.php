<?php
include '../function/conn.php';
include '../function/session.php';

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

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="test.png">
		</a>
		<ul class="side-menu top">
			<li>
				<a href="home.php">
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
			<li class="active">
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

	<div id="main-content">

		<a href="../function/teacher_add.php">Add Teacher</a>

		<form action="../function/teacher_result.php" method="get" ecntype="multipart/data-form">
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
							<td align="center"><a href="../function/teacher_edit.php?id=<?php echo md5($row['id']); ?>">Edit
								</a><a href="../function/teacher_delete.php?id=<?php echo md5($row['id']); ?>">Delete</a></td>
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
	<script src="script.js"></script>

</body>

</html>