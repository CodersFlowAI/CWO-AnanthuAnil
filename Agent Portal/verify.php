<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register System PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
		<!--PHP Start-->
		<?php

		session_start();

		// connect to the database
		include 'db_conn.php';
		              
		if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){

			// Verify data
			$email = mysqli_escape_string($db, $_GET['email']);
			$hash = mysqli_escape_string($db, $_GET['hash']);

			$query = "SELECT email, password, active, id FROM users WHERE email='$email' AND password='$hash' AND active=0";
			$search = mysqli_query($db, $query); 
			$match = mysqli_num_rows($search);

			if($match > 0){
				$row = mysqli_fetch_assoc($search);
				mysqli_query($db, "UPDATE users SET active=1 WHERE email='$email' AND password='$hash' AND active=0 AND id='" . $row['id'] . "'");
				$msg_success = 'Your account has been activated, you can now login';

			} else {
				$msg_danger = 'The url is either invalid or you have already activated your account';
			}

			} else {
				$msg_danger = 'Invalid approach, please use the link that has been send to your email';
			}


		?>
		<!--PHP End-->
		<div class="p-5 rounded shadow container-sm" style="text-align: center;">
			<h1 class="text-center pb-5 display-4">REGISTER</h1>
			<?php 
			    if(isset($msg_success)){
			    	$addr = "login.php";
			    	echo '<div class="alert alert-success" role="alert" name="alertmessage">' . $msg_success . '</div>';
			    	echo '<a href="/loginsystem/login.php" class="btn btn-primary">GO TO LOGIN</a>';
			    } elseif(isset($msg_danger)){
			    	echo '<div class="alert alert-danger" role="alert" name="alertmessage">' . $msg_danger . '</div>';
			    } 
			?>
		</div>
	</div>
</body>
</html>

