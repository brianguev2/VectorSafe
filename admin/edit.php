<?php 
    include '../dbh.php';
    include 'adminheader.php';
    global $db;


    
    
$employee = $_POST['employee'];
$_SESSION['e_ID']= $employee;


if(isset($_POST['employee'])) {
    	$result=mysqli_query($db, "SELECT * FROM employee WHERE e_ID='$employee'");
    	$obj=mysqli_fetch_object($result);
        $FName=$obj->e_FName;
        $LName=$obj->e_LName;
        $Username=$obj->e_Username;
        $PhoneNum=$obj->e_Phone;
        
}
else{
       print '<script>alert("Nobody Selected");</script>';
        //redirects to editlist.php
        print '<script>window.location.assign("editlist.php");</script>';
    
}

    
?>

<!--The form to create a new employee account.
Info posted is sent to employeeaccountconfirm.php-->

<html>
<head>


</head>
<body style="background-color:#CCD1D1;">
<h1 style="padding-left:200px">Edit</h1>
<form action="editconfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">
  <div class="form-group">
    <label>First Name:</label>
    <input class="form-control" type="text" name="firstname" value=<?php echo $FName; ?>  required>
  </div>
  <div class="form-group">
    <label>Last Name:</label>
    <input class="form-control" type="text" name="lastname" value=<?php echo $LName; ?> required>
  </div>
  <div class="form-group">
    <label>Phone:</label>
    <input class="form-control" type="tel" name="phone" value=<?php echo $PhoneNum; ?> pattern="^\d{10}" required>
  </div>
 
  <div class="form-group">
    <label>Username:</label>
    <input class="form-control" type="text" name="username" value=<?php echo $Username; ?> required>
  </div>

	<button type="submit" class="btn btn-primary" name="submit">Submit Changes</button>
	<br>
	<br>
	</form>
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
	
	
	
</body >
</html>
