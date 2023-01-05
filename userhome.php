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
    <link rel="stylesheet" href="user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
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
       <?php endif; ?> 
        
        <div class="dropdown">
  <button class="dropbtn">User Account</button>
  <div class="dropdown-content">
  <a id="bt" href="dashboard.php">DashBoard</a>
  <a id="bt" href="logout.php">Log out</a>
  </div>
</div>
        
        </div>
 
    </div>
          </div>


        </div>
      </nav>

     
      
      <div class="cover stacked">
        <div class="cover1">
            <img src="pic/cov3.JPG" alt=""></div>
       

        <div class="content_header">
          <h1>Excellence is on your hand</h1>
          <h2>for the better way to grow</h2>
          <h4>Special Prep for success with one on one online 
           <br> tutorials from our accredited tutors
          </h4>

          <div class="btn_header">
            <a href="http://localhost:8080/FINALS/bookingprocess.php">BOOK NOW</a>
          </div>
  
        </div>

      </div>
        <!-- -----------Subject Offers----------------- -->
     

        <div class="subject_con">
          <h1 style="color:rgb(75, 75, 75);">Subject Offered</h1>
        </div>
        <div class="container2">

        <div class="card_con">
            
           <div class="card_img">
             <img src="subject/math.png" alt="">
             <h2 style="color:rgb(0, 192, 226);">Math</h2>
          </div>

          <div class="card_img">
            <img src="subject/reading.png" alt="">
            <h2 style="color:rgb(255, 182, 45);">Reading</h2>
         </div>

         <div class="card_img">
          <img src="subject/eng.png" alt="">
          <h2 style="color:rgb(133, 207, 84);">English</h2>
       </div>

       <div class="card_img">
        <img src="subject/scince.png" alt="">
        <h2 style="color:#ff6f6f;">Science</h2>
     </div>

     <div class="card_img">
      <img src="subject/read.png" alt="">
      <h2 style="color:rgb(210, 132, 255);">Filipino</h2>
   </div>

   <div class="card_img">
    <img src="subject/other.png" alt="">
    <h2 style="color:rgb(236, 126, 0);">Many More</h2>
 </div>
 
        </div>

      </div>

      <!--------------mission/vision---------------- -->

      <div class="container3">

        
        <div class="con3_con">
        <img src="logo.PNG" alt="">
        <h2><span>EdSpecial is on a mission</span><br>to provide a quality Education
          to Special Learners
        </h2>

        <div class="btn3">
          <a href="bookingprocess.php">BOOK NOW</a>
        </div>


      </div>
      </div>

      <!------------------list of teachers----------------------->

      <div class="container4">

        <h2><a href="tutors.php">View all Tutors</a></h2>
        <div class="list_card">
          


          <div class="list">
            <img src="pic/dan.jpg" alt="">
            <div class="c1">

              <h3>Mark Daniel B. Sy</h3>
              <h4>Less Than a Year of Teaching Experience</h4>
              <p>Subjects <br>
                Reading, English, Reading for Early Readers</p>
                <p>Grade Levels <br>
                  Grade 10, Grade 5, Grade 6, 
                  Grade 4, Grade 2, Grade 1, 
                  Grade 7, Kinder, Grade 8, 
                  Grade 9, Grade 3</p>
            </div>
          </div>

          <div class="list">
            <img src="pic/RHAPAEL.jpg" alt="">
            <div class="c1">

              <h3>Raphael Africano </h3>
              <h4>Less Than a Year of Teaching Experience</h4>
              <p>Subjects <br>
                 Science, Filipino, English, Reading</p>
                <p>Grade Levels <br>
                  Grade 4, Grade 1, Grade 3, Kinder</p>
            </div>
          </div>

          <div class="list">
            <img src="pic/mhike.JPG" alt="">
            <div class="c1">

              <h3>Michael Manalo</h3>
              <h4>Less Than a Year of Teaching Experience</h4>
              <p>Subjects <br>
                Reading, Reading for Early Readers, Filipino, Art, English</p>
                <p>Grade Levels <br>
                  Grade Levels Grade 1, Grade 2, Grade 3, Kinder</p>
                </div>
           </div>
      </div>
        </div>

        <div class="container5">
          <div class="con5_grid">

          <div class="con5_con">
            <h1>Ensure a focused and tailor-fit <br>
               program for your child’s needs</h1>


               <div class="con5_grid2">


               <div class="con5_con2">
                <img src="ICON/man.png" alt="">
                <h3>Connect with online tutors</h3>
               </div>

               <div class="con5_con2">
                <img src="ICON/folders.png" alt="">
                <h3>Access e-learning materials</h3>
               </div>

               <div class="con5_con2">
                <img src="ICON/project-management.png" alt="">
                <h3>Manage classes</h3>
               </div>

               <div class="con5_con2">
                <img src="ICON/homework.png" alt="">
                <h3>Track your child’s homework</h3>
               </div>

               <div class="con5_con2">
                <img src="ICON/test.png" alt="">
                <h3>
                  Provide teacher evaluation</h3>
               </div>

               <div class="con5_con2">
                <img src="ICON/puzzle.png" alt="">
                <h3>
                  Enjoy afterclass activities</h3>
               </div>
              </div>

          </div>
          



            <div class="con5_img">
              <img src="pic/feats.png" alt="">
              
            </div>
          </div>
        </div>

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

    
    
    
    
    
    
    
    
    