<?php
session_start();
include_once("MANAGEMENT/connections/connection.php");
$con = connection();
$id = $_GET['ID'];

$sql = "SELECT * FROM pakages WHERE id = '$id'";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();

?>


<?php


if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_list
            WHERE id = {$_SESSION["user_id"]}";
    
          
    $result = $mysqli->query($sql);
    
    $user_list = $result->fetch_assoc();
}

?>

<?php
if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM child_list
            WHERE id = {$_SESSION["user_id"]}";
    
          
    $result = $mysqli->query($sql);
    
    $child_list = $result->fetch_assoc();
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="viewdetails/view.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container4">

<a href="dashboard.php"><img id="back" src="ICON/back.png" alt=""></a>

<h1><a href="tutors.php">Details</a></h1>
<div class="list_card">
  


  <div class="list">

    <div class="c1">


    <h2>Parent Profile</h2>
     
      <?php if (isset($user_list)): ?>
      <h4>First Name : <?= htmlspecialchars($user_list["first_name"]) ?></h4>
      <h4>Last Name : <?= htmlspecialchars($user_list["last_name"]) ?></h4>
      <h4>Gender : <?= htmlspecialchars($user_list["gender"]) ?></h4>
      <h4>Mobile Number : <?= htmlspecialchars($user_list["mobile"]) ?></h4>
      <?php endif; ?> 

        
     <h2>Child Profile</h2>
     
          <?php if (isset($child_list)): ?>
          <h4>First Name :  <?= htmlspecialchars($child_list["first_name"]) ?></h4>
          <h4>Last Name :  <?= htmlspecialchars($child_list["last_name"]) ?> </h4>
          <h4>Gender :  <?= htmlspecialchars($child_list["gender"]) ?></h4>
          <h4>Grade Level :  <?= htmlspecialchars($child_list["grade"]) ?></h4>
          <h4>Child Type :  <?= htmlspecialchars($child_list["child_type"]) ?></h4>
          <?php endif; ?> 

    <h2>Package </h2>

    <?php if (isset($row)): ?>
   <h4><span>Package Name : </span> <?= htmlspecialchars($row["p_name"]) ?> </h4>
      <h4><span>Date of Session : </span><?= htmlspecialchars($row["set_date"]) ?></h4>
      <h4><span>Time of Session : </span><?= htmlspecialchars($row["set_time"]) ?></h4>
      <h4><span>Number of Session : </span><?= htmlspecialchars($row["num_session"]) ?></h4>
      <h4><span>Subjects  : </span><?= htmlspecialchars($row["num_subject"]) ?></h4>
      <h4><span>Price  : </span><?= htmlspecialchars($row["session_price"]) ?> php</h4>
      <h4><span>Status : </span><?= htmlspecialchars($row["stat"]) ?></h4>
      <?php endif; ?> 

    





    </div>
  </div>



</body>
</html>