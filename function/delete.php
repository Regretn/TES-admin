<?php
	include 'conn.php';
	$id = $_GET['id'];
	$sql = "Delete from student where md5(id) = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:students.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>
