<?php

include_once("MANAGEMENT/connections/connection.php");
$con = connection();

if(isset($_POST['delete'])){

  $id = $_POST['ID'];
  $sql = "DELETE FROM tutor_db WHERE id = '$id'";
  $con->query($sql) or die ($con->error);

}

 echo header ("Location:MANAGEMENT/admintutor.php");
