<?php

  /*When the employee goes to create an employee account, it
    checks that the username has not already been used.
     If not, it successfully creates the employee account.*/

  //connect to database
  include '../dbh.php';
  include 'employeeheader.php';
  include 'autoload.php';

  global $db;
  //receives user input from form 
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
  
  $captcha=$_POST['g-recaptcha-response'];
  //$recaptcha= new \ReCaptcha\ReCaptcha('6LcvkRoUAAAAAEB8LA7A7oMLHkwx4VGbx5KrqQJy');

  $recaptcha= new \ReCaptcha\ReCaptcha('6LdE-CAUAAAAAP8Ja9zk5V4nxcPqFPTXrpR_AObM');
  $response= $recaptcha->verify($captcha);
        if($response->isSuccess())
        {
          
    $first_name = mysqli_real_escape_string($db, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($db, $_POST['lastname']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $user_name = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);
    $bool = true;


    //query the employee table
    $query = mysqli_query($db, "SELECT * FROM employee");

    //displaying all rows from query
    while($row = mysqli_fetch_array($query))
    {
      /*the first username row is passed on to $table_username,
      and so on until the query is finished */
      $table_username = $row['e_Username'];

      //checks if there are any matching fields
      if($user_name == $table_username)
      {
        $bool = false;
        //tell the user that the username has been taken
        print '<script>alert("Username has been taken!");</script>';
        //redirects to employeecreateaccount.php
        print '<script>window.location.assign("employeecreateaccount.php");</script>';
      }


    }

    //if there are no conflicts of username
    if($bool)
    {
        $num=randomID();
      //insert the values to table employee
      mysqli_query($db, "INSERT INTO `queue` (e_ID, e_FName, e_LName, e_Phone, e_Username, e_Password, e_AuthCode, e_Key) 
        VALUES ('$num', '$first_name', '$last_name', '$phone', '$user_name', '$password','000000','1234567890')");
      //prompt to let user know registration was succesful
      print '<script>alert("Successfully registered!");</script>';
    }
  }
  else
  {
        print '<script>alert("Unsuccessfully Registered");</script>';
        //redirects to employeecreateaccount.php
        print '<script>window.location.assign("employeecreateaccount.php");</script>';
  }
  }
  
  
  function randomID(){
	$num=mt_rand(1000,4000);

	return $num;

}

?>

<!DOCTYPE html>






<html>
    
  <body style="background-color:#CCD1D1;" align="center">
  
      <h1>Employee Account Confirmation </h1><br>
      <h3>First Name:</h3>
      <h3><?php echo $first_name; ?></h3><br>
      <h4>Last Name:</h4>
      <h3><?php echo $last_name; ?></h3><br>
      <h4>Phone:</h4>
      <h3><?php echo $phone; ?></h3><br>
      <h4>Username:</h4>
      <h3><?php echo $user_name; ?></h3><br>
    	<div align="center">
    <script>
    function goBack() {
   // window.location.replace("https://cyan.csam.montclair.edu/~torresa31/employee/employeelogin.php");
   window.location.replace("http://localhost/xampp/VectorSafe/~root/employee/employeelogin.php");
    }


    </script>
    <button onclick="goBack()" class="btn btn-primary" >Go Back</button>
   <br>
   <br>
    </div>
     

  </body>

</html>