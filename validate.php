<?php

session_start();

$valid_username = "Heliben";
$valid_password = "password123";

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) 
{ header("location: /");
    echo "Login successful!";
}
    else 
{
 if (!isset($_SESSION['failed_attempts']))
 {
     $_SESSION['failed_attempts'] = 1;
 }
  else{
     $_SESSION['failed_attempts']=$_SESSION['failed_attempts']+1;
  }
  echo "This is unsuccessful attempt number" .$_SESSION['failed_attempts'];
}
?>