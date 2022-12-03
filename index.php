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
$PID = $_POST["PID"];
$name = $_POST["Pname"];	


$conn = new mysqli('us-cdbr-east-06.cleardb.net','b36704ffd73c9a','cdb199ed','heroku_c8a8b19f80392e0');
if($conn->connect_error){
	die('Connection Failed  :  '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into patient(PID,Pname) values(?,?)");
	$stmt->bind_param("is",$PID,$name);
	$stmt->execute();
	echo"registration successfull";
	$stmt->close();
	$conn->close();
}

?>


}
<?php

$query = $conn ->query("SELECT * FROM patient");

?>


<table border="1">
	<tr>
		<td>ID</td>
		<td>Name</td>
	</tr>
	<?php
	
	while($row = $query->fetch_assoc()){
		echo "<tr>
			<td>{$row['PID']}</td>
			<td>{$row['Pname']}</td>
		</tr>";
	}
	?>
</table>
	
	
