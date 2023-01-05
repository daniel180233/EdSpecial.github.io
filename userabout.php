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
    <link rel="stylesheet" href="aboutpage/userabout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>


    <style>

</style>
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
    </div>
          </div>


        </div>
      </nav>

      <!-----------------about and content------------------- -->
      <div class="con_about">
        <div class="aboutcon">
            <div class="con">
                <h1>About Us</h1>
                <h2>Experience quality learning with EdSpecial!</h2>
                <p>EdSpecial is an online learning platform that 
                    provides virtual one-on-one and personalized 
                    tutorials for students. We offer professional
                     opportunities for Filipino tutors nationwide.</p>
            </div>
      
            <div class="con_img">
                <img src="pic/about.PNG" alt="">
            </div>
        </div>


    </div>
        <div class="misgrid">
        <div class="miscard">
            <div class="mission">
                <img src="ICON/flag.png" alt="">
            </div>
            <div class="mis_con">
                <h2>Our Mission</h2>
                <p>EdVenture aims to achieve this vision by integrating technology to the teaching-learning process of students,
                     equipping parents with what they need to catalyze educational transformation, and providing additional income to hundreds of Filipino teachers.</p>
            </div>
        </div>

        <div class="miscard">
            <div class="mission">
                <img src="ICON/visionary.png" alt="">
            </div>
            <div class="mis_con">
                <h2>Our Vision</h2>
                <p>EdVenture envisions to provide 21st-century quality education to Filipino learners while increasing the quality of life of the Filipino teachers.</p>
            </div>
        </div>

    </div>
        <div class="subscribe">

            <div class="subs">
              <img src="pic/child1.PNG" alt="">
           
            <h1>Subscribe now</h1>
            <h2>Register now and make every
                class a fun EdSpecial!</h2>
            <a href="bookingprocess.php">BOOK SESSION</a>
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