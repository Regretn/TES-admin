<?php
include 'conn.php';
include 'session.php';

$id = $_GET['id'];
$view = "SELECT * from student where md5(id) = '$id'";
$result = $conn->query($view);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {

	$id = $_GET['id'];

	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$student_number = $_POST['student_number'];
	$year = $_POST['year'];
	$section = $_POST['section'];

	$insert = "UPDATE student set name = '$name', user_name = '$user_name', password = '$password', student_number = '$student_number', year = '$year', section = '$section' where md5(id) = '$id'";

	if ($conn->query($insert) == TRUE) {

		echo "Sucessfully update data";
		header('location:students.php');
	} else {

		echo "Ooppss cannot add data" . $conn->error;
		header('location:students.php');
	}
	$conn->close();
}
?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="../admin-page/mycss.css">
	<title>
		TES Admin
	</title>
</head>

<body bgcolor="green">

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="test.png">
		</a>
		<ul class="side-menu top">
			<li>
				<a href="../admin-page/home.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li class="active">
				<a href="../admin-page/students.php">
					<i class='bx bxs-group'></i>
					<span class="text">Student</span>
				</a>
			</li>
			<li>
				<a href="../admin-page/teachers.php">
					<i class='bx bxs-message-alt-dots'></i>
					<span class="text">Teacher</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			<li>
				<a href="./function/logout.php" class="logout">
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
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Type Name here" required></td>
				</tr>
				<tr>
					<td>Usename: <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" placeholder="Type Username here.." required></td>
				</tr>
				<tr>
					<td>Password: <input type="text" name="password" value="<?php echo $row['password']; ?>" required></td>
				</tr>
				<tr>
					<td>Student Number: <input type="text" name="student_number" value="<?php echo $row['student_number']; ?>" required></td>
				</tr>
				<tr>
					<td>Year: <input type="text" name="year" value="<?php echo $row['year']; ?>" required></td>
				</tr>
				<tr>
					<td>Section: <input type="text" name="section" value="<?php echo $row['section']; ?>" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
		<br>

	</div>
	</div>
</body>

</html>