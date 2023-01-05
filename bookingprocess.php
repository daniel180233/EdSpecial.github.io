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

<?php



if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_list
            WHERE id = {$_SESSION["user_id"]}";


           
    $result = $mysqli->query($sql);
    
    $user_list = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="bookingprocess/bookingprocess.css">
    
    <!----===== Boxicons CSS ===== -->
    <!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <a href="userhome.php"><img src="pic/logo.png" alt=""></a>
                </span>

                <div class="text logo-text">
                    <span class="name">EdSpecial</span>
                    <span class="profession">Booking Website</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="profile2.php">
                        <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">My Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="bookingprocess.php">
                        <i class='bx bx-list-check icon'></i>
                            <span class="text nav-text">Book A Tutor</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="feedback.php">
                        <i class='bx bx-message-dots icon' ></i>
                            <span class="text nav-text">Feedback</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="userpayment.php">
                        <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Payment</span>
                        </a>
                    </li>

                   

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">User Dashboard</div>

        <div class="main-body">
      
      <div class="promo_card">

      
      <div>
        <h1>BOOK YOUR SESSION HERE</h1>

        <span>CHOOSE A PACKAGE</span>
       
       
      </div>
      
  

    </div>


  
    <?php if (isset($user)): ?>
       <div class="con_paclist">

        <div class="conpack">
               <h3>TRY US KNOW</h3>  
            <div class="conpac">
                <h2>TRIAL FREE</h2>
                <h1>FREE</h1>
                <p>1 session <br>
                1 subject</p>
                <div class="conbtn">
                <a href="bookingtrial.php?ID=<?php echo $user['id'];?>">BOOK TRIAL</a>
                </div>
            </div>
        </div>
<!-- -------------card 2------------------------ -->
        <div class="conpack2">
            <h3>LEARN TO READ!</h3>  
         <div class="conpac2">
             <h2>READING FOR EARLY READERS</h2>
             <h1>PHP 899</h1>
             <p>4 session <br>
             1 subject</p>
             <div class="conbtn2">
             <a href="bookingread.php?ID=<?php echo $user['id'];?>">BOOK NOW</a>
             </div>
         </div>
     </div>

<!-- -------------card 3------------------------- -->

<div class="conpack3">
    <h3>NEW!</h3>  
 <div class="conpac3">
     <h2>WHIZ KID</h2>
     <h1>PHP999</h1>
     <p>4 session <br>
     4 subject</p>
     <div class="conbtn3">
     <a href="bookingwhiz.php?ID=<?php echo $user['id'];?>">BOOK NOW</a>
     </div>
 </div>
</div>

<!-- ---------Card 4---------------------------------- -->


<div class="conpack4">
    <h3>NEW!</h3>  
 <div class="conpac4">
     <h2>ADVANCE LEARNER</h2>
     <h1>1,799</h1>
     <p>6 session <br>
     6 subject</p>
     <div class="conbtn4">
     <a href="bookingadvance.php?ID=<?php echo $user['id'];?>">BOOK NOW</a>
     </div>
 </div>
</div>


<?php endif; ?>


    </div>



    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>