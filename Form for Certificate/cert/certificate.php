<?php
	
	//ALTER TABLE certy AUTO_INCREMENT = 1; - Reset Auto Increment in db

	//Form Details
	$name = $_POST['fullname'];
	$email = $_POST['email'];

	//Create Connection
	$conn = new mysqli('localhost','root','','certificate_details');

	//Connection Error
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error) . "</h1>";
	}
	
	//Check Duplicates
	$duplicate_email = "SELECT email FROM certy WHERE email = '$email'  AND certificateid = 1 ";
	$result = mysqli_query($conn, $duplicate_email);
	$count = mysqli_num_rows($result);

	if($count > 0) {
		echo "<h1>Email already exists or Certificate already issued!</h1>";
	} else {
		//Enter Details into Table from Form
		$sql = "INSERT IGNORE INTO certy (fullname, email) VALUES ('$name', '$email')";

		//Check if Details entered
		if ($conn->query($sql) === TRUE) {
			$code = "SELECT * FROM certy WHERE issued=0";
			$res = mysqli_query($conn, $code);
			$rescount = mysqli_num_rows($res);

			if($rescount > 0){

				//header('content-type:image/jpeg');
				$font = "BRUSHSCI.TTF";
				$image = imagecreatefromjpeg('certificate.jpg');
				$color = imagecolorallocate($image, 255, 255, 255);
				
				//Format - imagettftext(image, size, angle, x, y, color, fontfile, text)
				//Adding Name 
				imagettftext($image, 75, 0, 250, 375, $color, $font, $name);

				//Adding Date
				$date = "6th may 2020";
				imagettftext($image, 30, 0, 800, 540, $color, $font, $date);


				//Clear Memory
				imagedestroy($image);

				//Fetch Database
				$idno = "SELECT * FROM certy WHERE fullname ='$name' and email = '$email' ";
				$idresult = mysqli_query($conn, $idno);
				$idcount = mysqli_num_rows($idresult);

				if ($idcount > 0) {

					//Change Issued column in db
					$row = mysqli_fetch_assoc($idresult);
					mysqli_query($conn,"UPDATE certy SET issued=1 WHERE id='" . $row['id'] . "'");
					mysqli_query($conn,"UPDATE certy SET certificateid=1 WHERE id='" . $row['id'] . "'");

					//Send Image to Browser
					//imagejpeg($image); #Display Certificate on browser screen
					imagejpeg($image,"certificate/id-" . $row['id'] . " name-" . $name . " certid-1.jpg");

					//Final Message
					echo "<h1>Thank You!<br>Your certificate will be send to you via your registered email!</h1>";
	
				}

			}
		} else {
			echo "<h1>Error: " . $sql . "<br>" . $conn->error . "</h1>";
		}
	}


	//End Connection
	$conn->close();

?>