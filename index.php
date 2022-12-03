<?php
include("config.php");

$query = $connect->query("SELECT * FROM PATIENT");
?>
<table border="1">
  <tr>
    <td>PID</td>
    <td>Patient Name</td>
  </tr>
  <?php
  $no =1;
  while($row = $query->fetch_assoc()){
    echo"<tr>
       <td>$no</td>
       <td>{$row['Pname']}</td>
     </tr>"
     $no++;
  }
  ?>
</table>
