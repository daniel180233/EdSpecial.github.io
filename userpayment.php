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
include_once("MANAGEMENT/connections/connection.php");

$con = connection();
$sql = "SELECT * FROM pakages WHERE pac_id={$_SESSION["user_id"]} ";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();

}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/upay.css">
    
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

                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li> -->

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

     
      
      <div class="promo_card">

      <?php if (isset($user)): ?>
      <div>
        <h2> Hi  <?= htmlspecialchars($user["name"]) ?></h2>
        <?php endif; ?>

        <h1> Here is your mode of Payment </h1>
        <span>Please pay before the day of session:</span>
    
       </div>
       </div> 
     
    
    

     <div class="containerko">
        <div class="kocontent">
            <h2>options:</h2>

            <hr>
            <a href="payment/gcash.php"><img id="credit" src="pic/g.png" alt=""></a>
              <br><hr>
           <br> <h1>Credit Card</h1>
            <a href="payment.php"><img id="credit" src="pic/credit.png" alt=""></a>

      </section>
      
    
</body>

  
    

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


</html>