<?php
session_start();
include_once("MANAGEMENT/connections/connection.php");
$con = connection();
$id = $_GET['ID'];

$sql = "SELECT * FROM tutor_db WHERE id = '$id'";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="tutors/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container4">

<a href="usertutor.php"><img id="back" src="ICON/back.png" alt=""></a>

<h2><a href="tutors.php">Profile</a></h2>
<div class="list_card">
  


  <div class="list">

     <?php 
          include_once("MANAGEMENT/connections/connection.php");
        $con = connection();
        $id = $_GET['ID'];
          $sql = "SELECT * FROM images WHERE id = '$id'";
         
          $res = mysqli_query($con,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             
             	<img id="pko" src="upload_profile/uploads/<?=$images['image_url']?>">
            
          		
    <?php } }?>


    <div class="c1">
    <?php if (isset($row)): ?>
      <h3><?= htmlspecialchars($row["t_nname"]) ?> <?= htmlspecialchars($row["t_lname"]) ?></h3>
      <h4><?= htmlspecialchars($row["t_exp"]) ?></h4>
      <p>Subjects <br>
      <?= htmlspecialchars($row["t_subject"]) ?></p>
        <p>Grade Levels <br>
        <?= htmlspecialchars($row["t_gl"]) ?></p>
        <?php endif; ?> 
    </div>
  </div>



</body>
</html>