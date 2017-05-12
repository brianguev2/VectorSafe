<?php 

include 'adminheader.php'; 
?>
<!DOCTYPE html>
<html>
<!--Displays page upon successful login.-->

<body style="background-color:#CCD1D1;">
      <div align='center'>
      <h1>Select an option below:</h1>
      <!--Need to create this page using same code as createaccount.php-->
      <!--<h3><a href="http://cyan.csam.montclair.edu/~torresa31/admin/admincreateemployee.php">Create Employee Account</a></h3>-->
      <h3><a href="http://localhost/xampp/VectorSafe/admin/admincreateemployee.php">Create Employee Account</a></h3>
      <h3><a href="employeelist.php">View Employee List</a></h3>
      <h3><a href="queuelist.php">View Awaiting Employees List</a></h3>
      <h3><a href="frozenlist.php">View Frozen Accounts</a></h3>
      
      <h3><a href="editlist.php">Edit Accounts</a></h3>
      <h3><a href="messagelist.php">Message Employee</a></h3>      
      </div>
    
         <br>
    	<div align="center">
    <script>
    function goBack() {
    window.location.replace("https://cyan.csam.montclair.edu/~torresa31/admin/adminfunctions.php");
    }


    </script>
    <button onclick="goBack()" class="btn btn-primary active" >Go Back</button>
   
    </div>
  </body>

</html>