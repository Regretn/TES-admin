<?php
session_start();
session_destroy();
unset($_SESSION['userID']);
header('location:/TES-admin/index.php');
exit();
?>