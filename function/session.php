<?php
session_start();

if (!isset($_SESSION['teacher_id']) || (trim($_SESSION['teacher_id']) == '')) {
	header('location:./index.php');
	exit();
}

$session_id = $_SESSION['teacher_id'];
