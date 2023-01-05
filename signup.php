<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="signuppage/sign.css">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="grid">
    <a href="index.html"><img src="ICON/back.png" alt=""></a>
    <div class="cover stacked">
       <div class="cov">

        
        <img src="pic/feats.png" alt=""></div>
        <div class="cover1">

            
            <h1>Signup</h1>
            
            
    

        <div class="content_header">

            <div id="msg"></div>
            <form action="process-signup.php" method="post" id="signup" novalidate>
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name">
                </div>
                
                <div>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email">
                </div>
                
                <div>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password">
                </div>
                
                <div>
                    <label for="password_confirmation">Repeat password</label><br>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                </div>
                
                <button id="btn" >Sign up</button>

                <h3>Already have an account? <a href="login.php">LOGIN</a> </h3>

                
        
                <p>By proceeding, you agree to our Terms and Privacy Policy.</p>
                </div>
            </form>

          
  
        </div>

 </div>
    

 
 <script src="js/Signup.js"></script>
</body>
</html>







