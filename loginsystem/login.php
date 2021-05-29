<?php
	
	include 'db_conn.php';

	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$datetime = date("F j, Y, g:i a");
	$useragent = $_SERVER['HTTP_USER_AGENT'];

	$query = $conn->prepare("INSERT INTO visited_users (ip_address, date_time, Browser) VALUES (?, ?, ?)");
	$query->execute([$ipaddress, $datetime, $useragent]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login System PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
		<!--PHP Start-->
		<?php 

		session_start();

		// connect to the database
		include 'db_conn.php';

		if (isset($_POST['email']) && isset($_POST['password'])) {
			
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$password = mysqli_real_escape_string($db, $_POST['password']);

			if (empty($email)) {
				echo "<script>alert('Email is required');</script>";
			} else if (empty($password)){
				echo "<script>alert('Password is required');</script>";
			} else {
				$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
				$stmt->execute([$email]);

				if ($stmt->rowCount() === 1) {
					$user = $stmt->fetch();

					$user_id = $user['id'];
					$user_email = $user['email'];
					$user_password = $user['password'];
					$user_full_name = $user['full_name'];
					$user_active = $user['active'];

					if ($user_active == 1) {
						if ($email === $user_email) {
							if (password_verify($password, $user_password)) {
								$_SESSION['user_id'] = $user_id;
								$_SESSION['user_email'] = $user_email;
								$_SESSION['user_full_name'] = $user_full_name;
								header("Location: index.php");
								die();

							} else {
								$msg = 'Incorrect Username or Password';
							}
						} else {
							$msg = 'Incorrect Username or Password';
						}
					} else {
						$msg = 'Please Activate your Account';
					}
				} else {
					$msg = 'Incorrect Username or Password';
				}
			}
		}

		?>
		<!--PHP End-->
		<form class="p-5 rounded shadow container-sm" action="" method="post">
			<h1 class="text-center pb-5 display-4">LOGIN</h1>
			<?php 
			    if(isset($msg)){
			    	echo '<div class="alert alert-danger" role="alert" name="alertmessage">' . $msg . '</div>';
			    } 
			?>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
				<!--
				<input type="email" name="email" value="<?php #if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
			</div>
			<button type="submit" class="btn btn-primary">LOGIN</button><a href="register.php" class="float-end py-2">Don't have an account? Register Now!</a>
		</form>
	</div>
</body>
</html>

