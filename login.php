<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: userhome.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>


<?php

if(!isset($_SESSION)){
  session_start();
}

include_once("MANAGEMENT/connections/connection.php");
$con = connection();

if(isset($_POST['login'])){

      $username = $_POST['email'];
      $password = $_POST['password'];
      
       $sql = "SELECT * FROM accout_users WHERE username = '$username' AND password = 
      '$password'";
      $user = $con->query($sql) or die ($con->error);
      $row = $user->fetch_assoc();
      $total = $user->num_rows;
      

      if($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['Access'] = $row['access'];
      echo header("Location: MANAGEMENT/mainadmin.php");
     
      }else{
       
      }

      
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="logincss/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="login_grid">



           <div class="login">
                <a href="index.html"><img src="ICON/back.png" alt=""></a>
             
                <img src="pic/logo.png" alt="">

            </div>


    <div class="cont">
      
      
     <div class="container2">
       <h1>Welcome Back!</h1>
    
      <?php if ($is_invalid): ?>
        <em>Invalid login</em>
       <?php endif; ?>
    
      <form method="post">
        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        <br>
        <label for="password">PASSWORD</label>
        <input type="password" name="password" id="password">
        <br>
        
        <button id="btn" name="login">Log in</button>
        
        <h3>New to EdSpecial?<a href="signup.php"> Sign up</a></h3>
        

        <p>By proceeding, you agree to our Terms and Privacy Policy.</p>
        </div>

        
             </form>

    
        

     </div>

       </div>


  
</div>
</body>
</html>








