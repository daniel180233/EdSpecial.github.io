<?php

session_start();

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
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="profile/profile2.css">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    
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
        <div class="text">Profile Management</div>

        

      <div class="promo_card">
          
      <h1>Parent Profile</h1>
      <div class="parent_con">
      <?php if (isset($user_list)): ?>
      <h2>First Name : <?= htmlspecialchars($user_list["first_name"]) ?></h2>
      <h2>Last Name : <?= htmlspecialchars($user_list["last_name"]) ?></h2>
      <h2>Gender : <?= htmlspecialchars($user_list["gender"]) ?></h2>
      <h2>Mobile Number : <?= htmlspecialchars($user_list["mobile"]) ?></h2>
   
      </div>
     

      <div class="main-body">
        <a class="edit" href="parentedit.php?ID=<?php echo $user_list['id'];?>">EDIT</a>
     </div>  
     <?php endif; ?>
      </div>   
  
      <div class="promo_card">
          
          <h1>Child Profile</h1>
          <div class="parent_con">
     
          <?php if (isset($child_list)): ?>
          <h2>First Name :  <?= htmlspecialchars($child_list["first_name"]) ?></h2>
          <h2>Last Name :  <?= htmlspecialchars($child_list["last_name"]) ?> </h2>
          <h2>Gender :  <?= htmlspecialchars($child_list["gender"]) ?></h2>
          <h2>Grade Level :  <?= htmlspecialchars($child_list["grade"]) ?></h2>
          <h2>Child Type :  <?= htmlspecialchars($child_list["child_type"]) ?></h2>
          </div>
         
         

          <div class="main-body">
          <a class="edit" href="childedit.php?ID=<?php echo $child_list['id'];?>">EDIT</a>
         </div>  
         <?php endif; ?>
          </div>  





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