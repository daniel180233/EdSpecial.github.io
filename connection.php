<?php

function connection(){

  $host = "localhost";
  $username = "root";
  $password = "180233";
  $database = "login_db";
  
  $con = new mysqli($host, $username, $password, $database);
  
  if($con->connect_error){
       
      echo $con->connect_error;
  } else {

    return $con;
  }

}