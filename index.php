<?php
include("config.php");

$query = $connect->query("SELECT * FROM patient");
?>
<table border="1">
  <tr>
    <td>PID</td>
    <td>Patient Name</td>
  </tr>
  <?php
  while($row = $query->fetch_assoc()){
    echo"<tr>
       <td>{$row['PID']}</td>
       <td>{$row['Pname']}</td>
     </tr>"
  }
  ?>
</table>
