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

		if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
			
			$fullname = mysqli_escape_string($db, $_POST['fullname']);
			$email = mysqli_escape_string($db, $_POST['email']);
			$password = mysqli_escape_string($db, $_POST['password']);
			$cpassword = mysqli_escape_string($db, $_POST['cpassword']);
				
			//Email Validation
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
			if(!preg_match($pattern, $email)){
				$msg = 'The email you have entered is invalid, please try again';
			} else {

				//Matching Passwords
				if ($password === $cpassword) {
					$user_check_query = $conn->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
					$user_check_query->execute([$email]);

					// if user exists
					if ($user_check_query->rowCount() === 1) {
						$user = $user_check_query->fetch();

						if ($user['email'] === $email) {
							$msg = 'Email already exists';
						}
					} else {
						
						//Password Validation
						$number = preg_match('@[0-9]@', $password);
						$uppercase = preg_match('@[A-Z]@', $password);
						$lowercase = preg_match('@[a-z]@', $password);
						$specialChars = preg_match('@[^\w]@', $password);

						if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
							$msg = 'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character';
						} else {

							//Register User
							$hashed_password = password_hash($password, PASSWORD_DEFAULT);
							$query = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
							$query->execute([$fullname, $email, $hashed_password]);
							//$_SESSION['username'] = $username;
							//$_SESSION['success'] = "You are now logged in";

							//Email Confirmation
							$to = $email;
							$subject = 'Signup | Verification';
							$message = '
							  
							Thanks for signing up!
							Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
							  
							----------------------------------------
							Username: ' . $fullname . '
							Password: ' . $password . '
							----------------------------------------
							  
							Please click this link to activate your account:
							http://www.yourwebsite.com/verify.php?email=' . $email . '&hash=' . $hashed_password . '';
							
							$headers = 'From:noreply@ourwebsite.com' . "\r\n";

							//Send Mail
							//mail($to, $subject, $message, $headers);

							$msg = 'Confirmation Email Sent';
						}
					}
				}
			}
		} elseif (isset($_POST['password']) && isset($_POST['cpassword']) && $password !== $cpassword) {
			$msg = "Password's do not match";
		}

		?>
		<!--PHP End-->
		<form class="p-5 rounded shadow container-sm" action="" method="post">
			<h1 class="text-center pb-5 display-4">REGISTER</h1>
			<?php 
			    if(isset($msg)){
			    	echo '<div class="alert alert-danger" role="alert" name="alertmessage">' . $msg . '</div>';
			    } 
			?>
			<div class="mb-3">
				<label for="exampleInputFullname1" class="form-label">Full Name</label>
				<input type="text" class="form-control" name="fullname" id="exampleInputFullname1" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword2" class="form-label">Confirm Password</label>
				<input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" required>
			</div>
			<button type="submit" class="btn btn-primary">REGISTER</button><a href="login.php" class="float-end py-2">Already have an account? Login Now!</a>
		</form>
	</div>
</body>
</html>

