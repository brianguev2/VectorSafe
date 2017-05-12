<?php
  /*Checks the username and password when employee
  tries to login.*/
  //start session
  session_start();
  //connect to database
  include '../dbh.php';
  include '../authCode.php';
  global $db;
  //receives user input for login from form in employeelogin.php
  $user_name = mysqli_real_escape_string($db, $_POST['username']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  //query the employee table
  $query = mysqli_query($db, "SELECT * FROM employee WHERE e_Username='$user_name'");
  //checks if table exists
  $exists = mysqli_num_rows($query);
  $table_users = "";
  $table_phone = "";
  //if there are returning rows for username
  

  if($exists > 0)
  {
      
 
      //get all rows from query
      while($row = mysqli_fetch_assoc($query))
      {
        /*the first username row is passed on to $table_users,
        and so on until the query is finished*/
        $table_users = $row['e_Username'];
        /*the first phone row is passed on to $table_phone,
        and so on until the query is finished*/
        $table_phone = $row['e_Phone'];
      }
      //checks if there are any matching fields
      if(($user_name == $table_users) && ($phone == $table_phone))
      {
        //phone matches
        if($phone == $table_phone)
        {
         $ac= new authCode();
         $ac->passwordReset($db,$user_name);
         
        }
      }
      //phone does not match username
      else
      {
        print '<script>alert("No Phone Number Exist");</script>';
        //redirects to employeelogin.php
        print '<script>window.location.assign("employeelogin.php");</script>';
        
      }
  }
  //if table does not exist or no existing username in table
  else
  {
    print '<script>alert("Incorrect Username");</script>';
    //redirects to employee.php
    print '<script>window.location.assign("employeelogin.php");</script>';
  }
   
 print '<script>window.location.assign("employeelogin.php");</script>';
  
  
  ?>