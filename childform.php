<?php

include_once("MANAGEMENT/connections/connection.php");
$con = connection();

if(isset($_POST['submit'])){

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $grade = $_POST['Grade'];
  $child = $_POST['childtype'];


  $sql = "INSERT INTO `child_list`(first_name, last_name, gender,grade,child_type)
  VALUES ('$fname','$lname','$gender','$grade','$child')";
  $con->query($sql) or die ($con->error);

  echo header("Location:login.php");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="form_user_info/childform.css">
    <link rel="icon" href="pic/logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Poppins:wght@500&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>CHILD FORM</title>

</head>
<body>
     <div class="container">
        <div class="forms">
            <div class="formlogin">
                <span class="title">Child's Information</span>

                <div id="msg"></div>
                <form action="" method="post" id="children-form">
                    
                
               
                    <div class="input-fileds">
                    <!-- this is for fisrt name -->
                    <input type="text" placeholder="Child first name here" id="fname" name="firstname" required />
                    <i class="uil uil-user"></i>
                    </div>
                    <!-- this is for last name -->
                    <div class="input-fileds">
                    <input type="text" placeholder="Child Last name here" id="lname" name="lastname" required/>
                    <i class="uil uil-user"></i>

                    </div>
                    <!-- this is for gender-->
                    <div class="input-radio">
                    <input type="radio" name="gender" id="male" value="male" required/>
                    <label for="male" >male</label>
                    <i class="uil uil-mars"></i>
                    </div>

                    <div class="input-radio">
                    <input type="radio" name="gender" id="female" value="female" />
                    <label for="female">female</label>
                    <i class="uil uil-venus"></i>
                    </div>
                    
                  
                    <div class="input-grade">
                    <label for="Grade" >Grade Level</label>
                    <select name="Grade" id="Grade" >
                         <option></option>
                        <option value="Grade Level" >Select Grade</option>
                        <option value="Kinder">Kinder</option>
                        <option value="Grade1">Grade 1</option>
                        <option value="Grade2">Grade 2</option>
                        <option value="Grade3">Grade 3</option>
                        <option value="Grade4">Grade 4</option>
                        <option value="Grade5">Grade 5</option>
                        <option value="Grade6">Grade 6</option>

                    </select>
                     </div>

                     <div class="input-grade">
                    <label for="Grade" >Child Type</label>
                    <select name="childtype" id="Grade" class="child" >
                         <option></option>
                        <option value="Type of Child" >Type of Child</option>
                        <option value="Autism">Autism</option>
                        <option value="ADHD">ADHD</option>
                        <option value="Down Syndrome">Down Syndrome</option>
                        <option value="Cerebral Palsy">Cerebral Palsy</option>
                        <option value="Epelepsy">Epelepsy</option>
                     

                    </select>
                     </div>
                    <!-- button -->
                    
            	    <div class="input-button">
            	    <input type="submit"  name="submit" class="btn" value="submit">
                    </div>

                    <div class="back">
                        <a href="parentform.php">Back</a>
                    </div>




            </form>





            </div>
        </div>
     </div>
        
</body>
</html>