<?php
include '../dbh.php';
/*
global $db;

if(!isset($_COOKIE[$cookie_name])) {
    
    		$result=mysqli_query($db, "SELECT admin_Key FROM admins WHERE admin_ID='1'");
		
    
        
        $obj=mysqli_fetch_object($result);
        
        $Key=$obj->admin_Key;
    
    
    $cookie_value = $Key;
    setcookie('key', $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

*/
include 'employeeheader.php'; ?>
<script>
    
        function reset() {
    //window.location.replace("https://cyan.csam.montclair.edu/~torresa31/employee/passwordreset.php");
    window.location.replace("http://localhost/xampp/VectorSafe/~root/employee/passwordreset.php");
    }

</script>
<div style="background-color:#f44336;">
    <div class="container">
       <div class="jumbotron" style="background-color:#f44336;">
             <p> Welcome to Vector Safe Network Security!<p>
                <p> Enter your login information to Continue</p>
            <br></br>
            <form id='login' method="POST" action="employeeconfirm.php">
           <div class="form-group"> <span class="glyphicon glyphicon-user"></span>
        <label for="usr">Username:</label> 
         <input type="text" class="form-control" id="usr" name="username" required>
           </div>
           <br>
           <div class="form-group"> 
           <div class="form-group"> <span class="glyphicon glyphicon-lock"></span>
                 <label for="pwd">Password:</label>
                 <input type="password" class="form-control" id="pwd" name="pass" required>
           </div>
           </form>
          <br>
           </div>
           <div>
           <button type="submit" background-color="#f44336" name="submit" class="btn btn-primary active" form = 'login'>Submit</button>
           
          <button name="reset" id='reset' class="btn btn-primary active" style="float:right;" onclick="reset()" >Request Password Reset</button>
         </div>
           <div class="jumbotron" style="background-color:#CCD1D1;">
<p align="center"><a href="employeecreateaccount.php">Register</a></p>
<p align="center"><a href="../admin/adminlogin.php">Admin Login</a></p>
  
</div>
 
       </div>

</div>


    </body>
</html>