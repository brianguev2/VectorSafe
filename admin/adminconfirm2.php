<?php


  /*Checks the username and password when customer
  tries to login.*/
  //start session
  session_start();
  //connect to database
  include '../dbh.php';
  include '../authCode.php';
  global $db;

  //receives user input for login from form in adminlogin.php
  $ac=new authCode();

  $user_input = mysqli_real_escape_string($db, $_POST['authCode']);
  if($_POST['action']=='resend'){
        print '<script>window.location.assign("adminlogin2.php");</script>';
      
  }
  $username=$_SESSION["adminuser_name"];

  //query the account table
  $isMatch=$ac->verifyCode($db, $username, $user_input, "admin"); 
  if ($isMatch==1){
        print '<script>alert("Correct Authorization Code!");</script>';
        //redirects to customerlogin2.php
        print '<script>window.location.assign("adminfunctions.php");</script>';
  }
  
  else
  {
        print '<script>alert("Incorrect Authorization Code!");</script>';
        //redirects to customerlogin2.php
        print '<script>window.location.assign("adminlogin2.php");</script>';
  } 
   header('Location: adminfunctions.php');
  //if table does not exist or no existing username in table
 
?>

