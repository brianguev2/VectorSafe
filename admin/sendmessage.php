<?php
include '../dbh.php';
include 'adminheader.php';
global $db;



$id = $_POST['employee'];

//to check if there is any selected
if(isset($id)) {
    
    	foreach ($id as $idd){
 
	
    $result=mysqli_query($db, "SELECT * FROM employee WHERE e_ID='$idd'");
        $obj=mysqli_fetch_object($result);
        $FName=$obj->e_FName;
        $LName=$obj->e_LName;
        $Username=$obj->e_Username;
        $PhoneNum=$obj->e_Phone;
       
    	}
    
}//end of loop		

else{
     print '<script>alert("Nobody was selected");</script>';
        //redirects to employeelist.php
  print '<script>window.location.assign("messagelist.php");</script>';
}







?>

<html>
<body style="background-color:#CCD1D1;" align="center">

<div align='center'>

<form action="sendmessageconfirm.php" method="post" >
<h3>Username:</h3><br>
<h4><?php echo $Username; ?></h4>
<h3>Phone Number:</h3><br>
<h4><?php echo $PhoneNum;?></h4><br> 
<h3>Message:</h3><br>
 
<textarea name="messageBox" cols="50" rows="5"></textarea>
<br><br>
<input type="submit" value="Send" class="btn btn-primary active">
<br><br>

<input type="checkbox" name=Username value= <?php echo $Username; ?>  checked hidden>
</form>

</div>
   <div align="center">
    <script>
    function goBack() {
    window.location.replace("https://cyan.csam.montclair.edu/~torresa31/admin/employeeindex.php");
    }


    </script>
    <button onclick="goBack()" class="btn btn-primary active">Go Back</button>
    <br>
    <br>
   
    </div>

</body>
</html>

