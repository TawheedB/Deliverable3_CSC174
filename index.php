<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<meta charset="UTF-8">

</head>

<body>

	<h1>Patient</h1>
	
	<form action="index.php" method="post">
		
		<label for="Pname">Name</label>
		<input type="text" id="Pname" name="Pname">

		<br>		

		<label for="PID">Patient ID#</label>
		<input type="text" pattern="\d*" name="PID">
		
		<br>

		<button>Send</button>
	</form>
</body>

</html>


<?php
include("config.php");

	$PID = $_POST["PID"];
	$name = $_POST["Pname"];

	print_r($_POST);	
$sql = "INSERT INTO message (PID, Pname)
        VALUES (?, ?)";
$stmt = mysqli_stmt_init($connect);
if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($connect));
}

mysqli_stmt_bind_param($stmt,"is",
                       $PID,
                       $name)

mysqli_stmt_execute($stmt);

echo "Record saved.";
