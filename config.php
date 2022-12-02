<?php
  $id = $_POST['PID'];
  $name = $_POST['Pname'];


  $db_host ="us-cdbr-east-06.cleardb.net";
  $db_user ="b36704ffd73c9a";
  $db_pass ="cdb199ed";
  $db_name ="heroku_c8a8b19f80392e0";

  $connect = new mysqli($db_host,$db_user,$db_pass,$db_name);
  if($connect->connect_error){
    die("Connection Failed  :  '.$connect->connect_error);
  }else{
      $stmt = $connect->prepare("insert into patient(PID,Pname)values(?,?)");
      $stmt->bind_param("is",$id,$name);
      echo"registration Completed";
      $stmt->close();
      $conn->close();
  }
  
