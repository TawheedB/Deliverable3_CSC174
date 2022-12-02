<?php
include("config.php");

$query = $connect->query("SELECT * FROM patient");
?>
<table border "1">
  <tr>
    <td>Patient ID</td>
    <td>Patient name</td>
  </tr>
  <?php
  $no = 1;
  while($row = $query->fetch_assoc()){
    echo "<tr>
       <td>$no</td>
       <td>{$row['name']}</td>
     </tr>";
     $no++;
   }
   ?>
 </table>
                         
