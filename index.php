<?php

session_start();

include("./function/conn.php");
include("./function/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		$query = "select * from teacher where user_name = '$user_name' limit 1";
		$result = mysqli_query($conn, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password && $user_data['user_type'] == 'teacher') {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: ./teacher-page/teacher.php");
					die;
				}


				if ($user_data['password'] === $password && $user_data['user_type'] == 'admin') {

					$_SESSION['teacher_id'] = $user_data['teacher_id'];
					header("Location: ./admin-page/home.php");
					die;
				}
			}
		}

		echo  "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<title>Login landing page</title>
</head>

<body>
	<section class="side">
		<img src="./images/teacher.png" alt="">
	</section>

	<section class="main">
		<div class="login-container">
			<p class="title">Welcome to TES</p>
			<div class="separator"></div>
			<p class="welcome-message">Teacher`s Evaluation System</p>


			<form method="post" name="login">
				<div class="form-control">
					<input type="text" placeholder="Username" name="user_name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-control">
					<input type="password" placeholder="Password" name="password" required>
					<i class="fas fa-lock"></i>
				</div>

				<button class="submit">Login</button>
			</form>
		</div>
	</section>

</body>

</html>