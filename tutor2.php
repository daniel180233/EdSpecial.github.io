<?php
session_start();
include_once("MANAGEMENT/connections/connection.php");

$con = connection();
$sql =  "SELECT * FROM tutor_db  ORDER BY id DESC";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();


?>

<?php
$con = connection();
$sql =  "SELECT * FROM images ORDER BY id DESC";    
$res = mysqli_query($con,$sql);
$rows = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="tutor_css/tutor2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>tutors</title>
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
            <li><a href="index.html"> Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="pakages2.html">Packages</a></li>
            <li><a href="tutors.php">Tutors</a></li>
            <li><a href="applytutor.php">Become Tutor</a></li>
            <li><a href="contact.php">Contact</a></li></ul>
          
          <div class="menu2">
            <ul>
            <li><a href="signup.php">Sign-up</a></li>
            <li><a href="login.php">Login</a></li>
            </ul>
          </div>


        </div>
      </nav>

      <!-----------------contact and content------------------- -->
      
 <div class="container">

                <div class="cont_con">
                <h1 style="color:#02214e;font-size: 50px;">TUTORS</h1>
                <h2>SEE A HERO</h2>
                </div>


                
 <div class="containerko">
 <div class="kocontent">
   
            <h2 style="margin-left:2em; color:gray;">TUTOR LIST</h2>
            <hr>
           
            
 <?php if( $row > 0 ){ ?>
 <?php  do{ ?>  
<div class="con">  
    <div class="list">
              <img  src="upload_profile/uploads/<?=$rows['image_url']?>" alt="tutor">
              
            <div class="c1">
                <h2>Hi i'm Teacher</h2>
             
              <h3><?php echo $row['t_nname'];?></h3>
              <h4><?php echo $row['t_exp'];?></h4>

                    <?php if (isset($row)): ?>
                     <a  id="btn" onclick="alert('Please Login to View');">view</a>
                     <?php endif; ?>  
            </div>
           

    </div>
    <?php }while($row = $users->fetch_assoc()) ?>
    <?php }else{ echo"<center><h1>No Tutors Inserted</h1></center>"; }?>	
    
       
</div>         
            
        
         
         
          
       
       
</div>
</div>
</div>
      

    
      <!-- --------------------------------------------------------- -->

        <footer>
          <div class="content_footer">
              <div class="aira">
                  <h1>edspecial<span style="color: rgb(5, 196, 202);">.</span></h1>
                  <p>Excepteur sint occaecat cupidatat non proident,
                       sunt in culpa qui officia dese mollit anim id est laborum.</p>
                     <br>  <p style="color: rgb(160, 160, 160);">@2018 atu. All rights reserved.</p>
              </div>
      
              <div class="contact">
                  <h1>Contact us
                  </h1>
                  <br>
                  <p><span style="color: rgb(160, 160, 160);">Email:</span>(+88) 999.888</p>
                  <br>
                  <p><span style="color: rgb(160, 160, 160);">Phone:</span>office@example.org</p>
                  <br>
                  <p><span style="color: rgb(160, 160, 160);">Address:</span>25 Canal St., New York</p>
              </div>
      
              <div class="quick">
                  <h1>Quick Links</h1>
                  
                  <a href="">About us</a>
                 
                  <a href="">Terms of Service</a>
                  
                  <a href="">Privacy</a>
      
              </div>
      
              <div class="socials">
                  <h1>Follow Us</h1>
      
      
                 <a href=""><img src="socials/f.svg" alt=""></a> 
                 <a href=""><img src="socials/t.svg" alt=""></a>
                 <a href=""><img src="socials/i.svg" alt=""></a>
                 <a href=""><img src="socials/in.svg" alt=""></a>
      
              </div>
          </div>
      </footer>

</body>
</html>