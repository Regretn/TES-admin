<?php
	include 'conn.php';
	$id = $_GET['id'];
	$sql = "Delete from teacher where md5(id) = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:teachers.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>
