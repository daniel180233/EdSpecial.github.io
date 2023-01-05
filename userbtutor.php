<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="applytutor/userbtutor.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>contact</title>
</head>
<body>

    <nav class="menu-container">
        <!-- burger menu -->
        <input type="checkbox" aria-label="Toggle menu" />
        <span></span>
        <span></span>
        <span></span>
      
        <!-- logo -->
        <a href="#" class="menu-logo">
          <img src="pic/logo.PNG" alt="">
        </a>
      
        <!-- menu items -->
        <div class="menu">
            
        <ul>
            <li><a href="userhome.php"> Home</a></li>
            <li><a href="userabout.php">About Us</a></li>
            <li><a href="userpackages.php">Pakages</a></li>
            <li><a href="usertutor.php">Tutors</a></li>
            <li><a href="userbtutor.php">Become Tutor</a></li>
            <li><a href="usercontact.php">Contact</a></li></ul>
          
            <div class="menu2">
          <?php if (isset($user)): ?>
      <div>
        <p> <?= htmlspecialchars($user["name"]) ?></p>

        
<div class="dropdown">
  <button class="dropbtn">User Account</button>
  <div class="dropdown-content">
  <a id="bt" href="dashboard.php">DashBoard</a>
  <a id="bt" href="logout.php">Log out</a>
  </div>
</div>

        </div>
        
    <?php endif; ?> 
      </nav>

      <!-----------------contact and content------------------- -->
      
      <div class="con">
        <h1>
            Become a Tutor
        </h1>

        <h2>Here at EdSpecial</h2>
        <h4>A new Special learning starts with online tutoring!
             Join the EdSpecial team to earn while giving kids
              a better and special homeschool experience.</h4>
              

              <div class="arrow">
              
                  <img src="gif/arrow.gif" alt="">
                  <p>Send your CV here :</p>
                  
                  <h2>edspecialhr@gmail.com</h2>
              </div>
             
      </div>
      
      
       
      

    
      <!-- --------------------------------------------------------- -->

      <footer>
          <div class="content_footer">
              <div class="aira">
                  <h1>edspecial<span style="color: rgb(5, 196, 202);">.</span></h1>
                  <p>EdSpecial is always here for you.</p>
                     <br>  <p style="color: rgb(160, 160, 160);">@2018 atu. All rights reserved.</p>
              </div>
      
              <div class="contact">
                  <h1>Contact us
                  </h1>
                  <br>
                  <p><span style="color: rgb(160, 160, 160);">Email: </span>edspecial11@gmail.com</p>
                  <br>
                  <p><span style="color: rgb(160, 160, 160);">Phone: </span>09501441526</p>
                  <br>
                  <p><span style="color: rgb(160, 160, 160);">Address: </span>Sampaloc Lake,San Pablo City Laguna</p>
              </div>
      
              <div class="quick">
                  <h1>Quick Links</h1>
                  
                  <a href="userabout.php">About us</a>
                 
                  <a href="">Terms of Service</a>
                  
                  <a href="">Privacy</a>
      
              </div>
      
              <div class="socials">
                  <h1>Follow Us</h1>
      
      
                 <a href="https://www.facebook.com/ed.special.1"><img src="socials/f.svg" alt=""></a> 
                 <a href=""><img src="socials/t.svg" alt=""></a>
                 <a href=""><img src="socials/i.svg" alt=""></a>
                 <a href=""><img src="socials/in.svg" alt=""></a>
      
              </div>
          </div>
      </footer>

</body>
</html>