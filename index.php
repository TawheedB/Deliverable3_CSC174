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
	$PID = $_POST["PID"];

	print_r($_POST);	
$host = "us-cdbr-east-06.cleardb.net";
$dbname = "heroku_c8a8b19f80392e0";
$username = "b36704ffd73c9a";
$password = "cdb199ed";

$connect = mysqli_connect($db_hsot,$db_user,$db_pass,$db_name) or die("database connection error");




