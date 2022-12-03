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

$name = $_POST["Pname"];

$host = "us-cdbr-east-06.cleardb.net";
$dbname = "heroku_c8a8b19f80392e0";
$username = "b36704ffd73c9a";
$password = "cdb199ed";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO patient (PID, Pname)
        VALUES (5, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "s",
                       $name);

mysqli_stmt_execute($stmt);


echo "Record saved.";
