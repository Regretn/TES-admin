<?php
include 'conn.php';
include 'session.php';
if(isset($_POST['add'])){

	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$teacher_id = $_POST['teacher_id'];
	$subject = $_POST['subject'];
	$year= $_POST['year'];
	$date= $_POST['date'];

	$insert = "insert into student (name,user_name,password,teacher_id,subject,year,date) values ('$name','$user_name','$password','$teacher_id','$subject','$year','$date')";
	
	if($conn->query($insert)== TRUE){

			echo "Sucessfully add data";
			header('location:teachers.php');
	}else{

		echo "Ooppss cannot add data" . $conn->connect_error;
		header('location:teachers.php');
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
					<th>Teacher ID</th>
					<th>Subject</th>
					<th>Year</th>
					<th>Date</th>
					<th>Action</th>
					</tr>
					<?php
					
					if(isset($_GET['search'])){
						$query = $_GET['query'];

						$sql = "select * from teacher where name like '%$query%' or teacher_id like '%$query%'";

						$result = $conn->query($sql);
						if($result->num_rows > 0){
							while($row1 = $result->fetch_array()){
								$name = $row1['name'];
								$user_name = $row1['user_name'];
								$password = $row1['password'];
								$teacher_id = $row1['teacher_id'];
								$subject = $row1['subject'];
								$year = $row1['year'];
								$date = $row1['date'];

		
						?>
						<tr>
							<td align="center"><?php echo $name;?></td>
							<td align="center"><?php echo $user_name;?></td>
							<td align="center"><?php echo $password;?></td>
							<td align="center"><?php echo $teacher_id;?></td>
							<td align="center"><?php echo $subject;?></td>
							<td align="center"><?php echo $year;?></td>
							<td align="center"><?php echo $date;?></td>					
							<td align="center"><a href="edit.php?id=<?php echo md5($row1['id']);?>">Edit
							</a><a href="delete.php?id=<?php echo md5($row1['id']);?>">Delete</a></td>
						</tr>
						<?php
					
							}

						}else{
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