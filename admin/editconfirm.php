<?php

  /*When the employee goes to create an employee account, it
    checks that the username has not already been used.
     If not, it successfully creates the employee account.*/

  //connect to database
  include '../dbh.php';
  include 'adminheader.php';

  global $db;

  $id=$_SESSION['e_ID'];
  
  //receives user input from form 
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
   
    $first_name = mysqli_real_escape_string($db, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($db, $_POST['lastname']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $user_name = mysqli_real_escape_string($db, $_POST['username']);



    //query the employee table
    $query = mysqli_query($db, "SELECT * FROM employee");

    //displaying all rows from query
    while($row = mysqli_fetch_array($query))
    {
      /*the first username row is passed on to $table_username,
      and so on until the query is finished */
      $table_username = $row['e_Username'];

      //checks if there are any matching fields


    }

    //if there are no conflicts of username

    
      //insert the values to table employee
      mysqli_query($db, "UPDATE `employee` SET e_FName='$first_name, e_LName=$last_name, e_Phone=$phone, e_Username=$user_name WHERE e_ID='$id'" );
      //prompt to let user know registration was succesful
      print '<script>alert("Changes Have Been Made");</script>';

  

  }
?>

<!DOCTYPE html>
<html>
  <body style="background-color:#CCD1D1;" align='center'>
  
      <h1>Employee Account Confirmation: </h1><br>
      <h3>First Name:</h3>
      <h4><?php echo $first_name; ?></h4><br>
      <h3>Last Name:</h3>
      <h4><?php echo $last_name; ?></h4><br>
      <h3>Phone:</h3>
      <h4><?php echo $phone; ?></h4><br>
      <h3>Username:</h3>
      <h4><?php echo $user_name; ?></h4><br>    
      
      
      
     

  </body>
  
  
    <div align="center">
    <script>
    function goBack() {
    window.location.replace("https://cyan.csam.montclair.edu/~torresa31/admin/employeeindex.php");
    }
    </script>
    <button onclick="goBack()" class="btn btn-primary active" >Go Back</button>
   <br>
   <br>
    </div>

</html>