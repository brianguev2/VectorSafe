<?php
  /*Checks the username and password when employee
  tries to login.*/
  //start session
  session_start();
  //connect to database
  include '../dbh.php';
  global $db;
  //receives user input for login from form in employeelogin.php
  $user_name = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);
  //query the employee table
  $query = mysqli_query($db, "SELECT * FROM employee WHERE e_Username='$user_name'");
  
  //checks if table exists
  $exists = mysqli_num_rows($query);
  $table_users = "";
  $table_password = "";
  $table_key='';
  //if there are returning rows for username
  if($exists > 0)
  {
      //get all rows from query
      while($row = mysqli_fetch_assoc($query))
      {
        /*the first username row is passed on to $table_users,
        and so on until the query is finished*/
        $table_users = $row['e_Username'];
        /*the first password row is passed on to $table_password,
        and so on until the query is finished*/
        $table_password = $row['e_Password'];
        /*the first key row is passed on to $table_key,
        and so on until the query is finished*/
        $table_key=$row['e_Key'];
      }
      //checks if there are any matching fields
      

      if(($user_name == $table_users) && ($password == $table_password))
      {
        
        
        //password matches
        if($password == $table_password)
        {
        if($_COOKIE['key']==$table_key){
            //key pass
          $_SESSION['user_name'] = $user_name;
          $_SESSION['attempts']=0;
        }
        else{
            //key faill
        print '<script>alert("Key has expired. Please contact admin for troubleshooting.");</script>';
        //redirects to employeelogin.php
        print '<script>window.location.assign("employeelogin.php");</script>';
        }
        }
        
       
        
        
      }
      //password does not match username
      elseif($_SESSION['attempts']<5)
      {
        //attempts counter
        $_SESSION['attempts']+=1;
        print '<script>alert("Incorrect Username/Password!");</script>';
        //redirects to employeelogin.php
        print '<script>window.location.assign("employeelogin.php");</script>';
      }
      else{
          //freeze
            print '<script>alert("The account has been frozen. Please contact an administrator to unfreeze the account.");</script>';
        //redirects to employeelogin.php
        print '<script>window.location.assign("employeelogin.php");</script>';
        //move and delete
      mysqli_query($db, "INSERT INTO frozen SELECT * FROM employee WHERE e_Username='$user_name'");
            mysqli_query($db, "DELETE FROM employee WHERE e_Username='$user_name'");
          
      }
  

  }
  //if table does not exist or no existing username in table
  else
  {
    print '<script>alert("Incorrect Username/Password!");</script>';
    //redirects to employeelogin.php
    print '<script>window.location.assign("employeelogin.php");</script>';
  }
  header('Location: customerlogin2.php');
?>