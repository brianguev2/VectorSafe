<?php
  /*Checks the username and password when employee
  tries to login.*/
  //start session
  session_start();
  //connect to database
  include '../dbh.php';
  global $db;
  //receives user input for login from form in adminlogin.php
  $user_name = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);
  //query the admin table
  $query = mysqli_query($db, "SELECT * FROM admins WHERE admin_Username='$user_name'");
  //checks if table exists
  $exists = mysqli_num_rows($query);
  $table_users = "";
  $table_password = "";
  //if there are returning rows for username
  if($exists > 0)
  {
      //get all rows from query
      while($row = mysqli_fetch_assoc($query))
      {
        /*the first username row is passed on to $table_users,
        and so on until the query is finished*/
        $table_users = $row['admin_Username'];
        /*the first password row is passed on to $table_password,
        and so on until the query is finished*/
        $table_password = $row['admin_Password'];
      }
      //checks if there are any matching fields
      if(($user_name == $table_users) && ($password == $table_password))
      {
        //password matches
        if($password == $table_password)
        {
          $_SESSION['adminuser_name'] = $user_name;
        }
      }
      //password does not match username
      else
      {
        print '<script>alert("Incorrect Username/Password!");</script>';
        //redirects to adminlogin.php
        print '<script>window.location.assign("adminlogin.php");</script>';
      }
  }
  //if table does not exist or no existing username in table
  else
  {
    print '<script>alert("Incorrect Username/Password!");</script>';
    //redirects to adminlogin.php
    print '<script>window.location.assign("adminlogin.php");</script>';
  }
  header('Location: adminlogin2.php');
?>