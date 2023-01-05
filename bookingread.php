<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM child_list
            WHERE id = {$_SESSION["user_id"]}";
    
          
    $result = $mysqli->query($sql);
    
    $child_list = $result->fetch_assoc();
}

?>




<?php

include_once("connection.php");
$con = connection();



if(isset($_POST['submit'])){

  $userid = $_SESSION['user_id'];
  $pname = $_POST['packagename'];
  $sdate = $_POST['date'];
  $stime = $_POST['time'];
  $session = $_POST['session'];
  $sub = $_POST['subject'];
  $price = $_POST['price'];
  $stat = $_POST['stat'];
  


  $sql = "INSERT INTO `PAKAGES`(pac_id,p_name,set_date, set_time, num_session ,num_subject,session_price,stat)
  VALUES ($userid,'$pname','$sdate','$stime','$session','$sub','$price','$stat')";
  $con->query($sql) or die ($con->error);



  header("Location:bookingprocess.php");

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="booking_form_css/bookingtrial.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Poppins:wght@500&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>READING FOR EARLY READERS</title>

</head>
<body>
     <div class="container">
        <div class="forms">
            <div class="formlogin">
                <span class="title">READING FOR EARLY READERS</span>
            
                <h5 style="color:gray;">Our READING Session class consist of 1-hour every session</h5>
           <br><h2>Child Info</h2>
                <?php if (isset($child_list)): ?>
          <h4>First Name  :  <?= htmlspecialchars($child_list["first_name"]) ?></h4>
          <h4>Last Name   :  <?= htmlspecialchars($child_list["last_name"]) ?> </h4>
          <h4>Gender      :  <?= htmlspecialchars($child_list["gender"]) ?></h4>
          <h4>Grade Level :  <?= htmlspecialchars($child_list["grade"]) ?></h4>
          <h4>Child Type  :  <?= htmlspecialchars($child_list["child_type"]) ?></h4>
          </div>
          <?php endif; ?>

            <form action="#" method="post">
                    <br>
            <select name="packagename" >
                        <option value="READING FOR EARLY READERS" >READING FOR EARLY READERS</option>
                    </select>


            <div class="input-grade">
            <label for="date" >Set Date</label>
                   <div class="input-fileds">
                     <input value="date" name="date" type="date" placeholder=" Package Price" name="price"/>
                     <i class='bx bxs-calendar'></i>
                    </div>

            </div>
            <br>  <div class="input-grade" required>
                    <label for="time" >TIME</label>
                    <select name="time" >
                        <option value="10:00 am- 04:00 pm">10:00 am- 04:00 pm</option>
                      

                    </select>
                     </div>
            

                    <div class="input-grade">
                    <label for="subject" >Subject</label>
                    <select name="subject" id="Grade" >
                        <option>Select Subject</option>
                        <option value="English">English</option>
                        <option value="Math">Math</option>
                        <option value="Reading">Reading</option>
                        <option value="Filipino">Filipino</option>
                        <option value="Science">Science</option>
                        <option value="Araling Panlipunan">Araling Panlipunan</option>
                    </select>
                     </div>

                     

                     <div class="input-grade">
                    <label for="session" >Session</label>
                    <select name="session" >
                        <option value="4" >4</option>
                    </select>
                     </div>

                     <div class="input-fileds">
                     <input value="899" placeholder=" Package Price" name="price"/>
                    <i class='bx bx-purchase-tag-alt'></i>
                    </div>

                    <input type="hidden" value="pending" placeholder=" Package Price" name="stat"/>
                    <!-- button -->
            
                    
            	    <div class="input-button">
            	    <input onclick="alert('Successfully set');" type="submit" name="submit" class="btn" value="submit">
                    </div>

                    <div class="back">
                        <a href="bookingprocess.php">Back</a>
                    </div>

             


            </form>





               </div>
        </div>
     </div>
</body>
</html>