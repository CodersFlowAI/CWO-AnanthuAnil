<?php
	$sName = "localhost";
	$uName = "root";
	$pass = "";
	$db_name = "main_db";

	// Create connection
	$db = new mysqli($sName, $uName, $pass, $db_name);

	// Check connection
	if ($db->connect_error) {
	  die("Connection failed: " . $db->connect_error);
	}

	// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
	// VALUES ('John', 'Doe', 'john@example.com')";

	// if ($db->query($sql) === TRUE) {
	//   echo "New record created successfully";
	// } else {
	//   echo "Error: " . $sql . "<br>" . $db->error;
	// }

	$sql = "SELECT * FROM tasks";
	$sql1 = "SELECT task_id FROM tasks";
	$sql2 = "SELECT task_name FROM tasks";
	$sql3 = "SELECT task_date FROM tasks";
	$sql4 = "SELECT agent_id FROM tasks";
	$sql5 = "SELECT agent_name FROM tasks";
	$result = $db->query($sql);
	$result1 = $db->query($sql1);
	$result2 = $db->query($sql2);
	$result3 = $db->query($sql3);
	$result4 = $db->query($sql4);
	$result5 = $db->query($sql5);
	$task1 = mysqli_fetch_all($result1, MYSQLI_ASSOC); // task_id
	$task2 = mysqli_fetch_all($result2, MYSQLI_ASSOC); // task_name
	$task3 = mysqli_fetch_all($result3, MYSQLI_ASSOC); // task_date
	$task4 = mysqli_fetch_all($result4, MYSQLI_ASSOC); // agent_id
	$task5 = mysqli_fetch_all($result5, MYSQLI_ASSOC); // agent_name

	
// for ($i=0; $i < sizeof($task1); $i++) { 
// 	print_r($task1[$i]["task_id"]);
// }
 
// echo "<br>";
// print_r($task2[0]["task_name"]);
// echo "<br>";
// print_r($task3[0]["task_date"]);
// echo "<br>";
// print_r($task4[0]["agent_id"]);
// echo "<br>";
// print_r($task5[0]["agent_name"]);

// if ($result->num_rows > 0) {

// } else {
//   echo "0 results";
// }


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/drag.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
	<!-- partial:index.partial.html -->
	<!-- JJ -->
	<div id="page">
		<div id="workarea">
			<div id="completed-tasks">
				<h3>
					<em class="icon-ok icon-large"></em> Completed Cases
				</h3>	
			</div><!-- #completed-tasks -->
			<div id="users" class="user-panels">
				<div id="user-1" class="user-panel">
					<h4 class="user-name">John Doe</h4>
					<div class="toolbar">
						<a href="#" class="add-task icon icon-plus"></a>
					</div>
					<div class="task-list">
						<?php
							for ($i=0; $i < sizeof($task1); $i++) {
								if ($task4[$i]["agent_id"] == 1) {
									echo '<div id="task-' . $task1[$i]["task_id"] . '" class="task">
													<p>' . $task2[$i]["task_name"] . '</p>
													<div class="actions">
														<a href="#" class="icon-caret-right"></a>
														<a href="#" class="icon-ok"></a>
														<a href="#" class="icon-trash"></a>
													</div>
												</div>';
								}
							}
						?>
					</div>
				</div>

				<div id="user-2" class="user-panel">
					<h4 class="user-name">Jane Doe</h4>
					<div class="toolbar">
						<a href="#" class="add-task icon icon-plus"></a>
					</div>
					<div class="task-list">
						<?php
							for ($i=0; $i < sizeof($task1); $i++) {
								if ($task4[$i]["agent_id"] == 2) {
									echo '<div id="task-' . $task1[$i]["task_id"] . '" class="task">
													<p>' . $task2[$i]["task_name"] . '</p>
													<div class="actions">
														<a href="#" class="icon-caret-right"></a>
														<a href="#" class="icon-ok"></a>
														<a href="#" class="icon-trash"></a>
													</div>
												</div>';
								}
							}
						?>
					</div>
				</div>

				<div id="user-3" class="user-panel">
					<h4 class="user-name">Suzy Q</h4>
					<div class="toolbar">
						<a href="#" class="add-task icon icon-plus"></a>
					</div>
					<div class="task-list">
						<?php
							for ($i=0; $i < sizeof($task1); $i++) {
								if ($task4[$i]["agent_id"] == 3) {
									echo '<div id="task-' . $task1[$i]["task_id"] . '" class="task">
													<p>' . $task2[$i]["task_name"] . '</p>
													<div class="actions">
														<a href="#" class="icon-caret-right"></a>
														<a href="#" class="icon-ok"></a>
														<a href="#" class="icon-trash"></a>
													</div>
												</div>';
								}
							}
						?>
					</div>
				</div>
			</div><!-- #users -->			
		</div><!-- #workarea -->
	</div><!-- #page -->
	<!-- SDG -->
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="js /drag.js"></script>

</body>
</html>

<?php


	$db->close();

?>