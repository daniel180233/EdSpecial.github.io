<?php

include_once("MANAGEMENT/connections/connection.php");
$con = connection();
$id = $_GET['ID'];

$sql = "SELECT * FROM user_list WHERE id = '$id'";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();

if(isset($_POST['update'])){

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $number = $_POST['phone'];


  $sql = "UPDATE user_list SET first_name = '$fname', last_name = '$lname', gender ='$gender',mobile='$number' WHERE id = '$id' ";
  $con->query($sql) or die ($con->error);

  echo header("Location: profile2.php?ID=".$id);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="form_user_info/user_info_form.css">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Poppins:wght@500&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>PARENT UPDATE FORM</title>

</head>
<body>
     <div class="container">
        <div class="forms">
            <div class="formlogin">
                <span class="title">Parent's Update Information </span>
            <form action="#" method="post">

                    <div class="input-fileds">
                    <!-- this is for fisrt name -->
                    <input type="text" placeholder="Enter your first name here" name="firstname" required />
                    <i class="uil uil-user"></i>
                    </div>
                    <!-- this is for last name -->
                    <div class="input-fileds">
                    <input type="text" placeholder="Enter your Last name here" name="lastname" required/>
                    <i class="uil uil-user"></i>

                    </div>
                    <!-- this is for gender-->
                    <div class="input-radio">
                    <input type="radio" name="gender" id="male" value="Male" required/>
                    <label for="male" >male</label>
                    <i class="uil uil-mars"></i>
                    </div>

                    <div class="input-radio">
                    <input type="radio" name="gender" id="female" value="Female" />
                    <label for="female">female</label>
                    <i class="uil uil-venus"></i>
                    </div>
                    
                    <!-- phone number-->
                    <div class="input-fileds">
                    <input type="phone" placeholder="Enter your number name here" name="phone" pattern="[0-9]{11}" />
                    <i class="uil uil-phone-alt"></i>
                    </div>
                     
                    <!-- checkbox for agreement -->
                    <div class="input-chk">
                    <input type="checkbox" name="check" required>
                    <label for="check">terms and conditions that youare signing in with our offers </label>
                    </div>
            	    <div class="input-button">
            	    <input type="submit" name="update" class="btn" value="Update Profile">
                    </div>
                    <a href="profile2.php">cancel</a>


            </form>





            </div>
        </div>
     </div>
</body>
</html>