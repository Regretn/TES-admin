<?php
include 'conn.php';
include 'session.php';

$id = $_GET['id'];
$view = "SELECT * from teacher where md5(id) = '$id'";
$show = $conn->query($view);
$row = $show->fetch_assoc();

if(isset($_POST['update'])){

	$id = $_GET['id'];

	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$teacher_id = $_POST['teacher_id'];
	$subject = $_POST['subject'];
	$year = $_POST['year'];
	$date = $_POST['date'];

	$insert = "UPDATE teacher set name = '$name', user_name = '$user_name', password = '$password', teacher_id = '$teacher_id', subject = '$subject', year = '$year', date = '$date' where md5(id) = '$id'";
	
	if($conn->query($insert)== TRUE){

			echo "Sucessfully update data";
			header('location:teachers.php');			
	}else{

		echo "Ooppss cannot add data" . $conn->error;
		header('location:teachers.php');
	}
	$conn->close();
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
			<div id="content">
				<form action="" method="POST">
				<table align="center">
					<tr>
						<td>Name: <input type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Type Name here" required></td>
						</tr>
						<tr>
							<td>Usename: <input type="text" name="user_name"  value="<?php echo $row['user_name'];?>" placeholder="Type Username here.." required></td>
						</tr>
						<tr>
							<td>Password: <input type="text" name="password"  value="<?php echo $row['password'];?>" required></td>
						</tr>
						<tr>
							<td>Teacher ID: <input type="text" name="teacher_id"  value="<?php echo $row['teacher_id'];?>" required></td>
						</tr>
						<tr>
							<td>Subject: <input type="text" name="subject"  value="<?php echo $row['subject'];?>" required></td>
						</tr>
						<tr>
							<td>Year: <input type="text" name="year"  value="<?php echo $row['year'];?>" required></td>
						</tr>
						<tr>
							<td>Date: <input type="text" name="year"  value="<?php echo $row['date'];?>" required></td>
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