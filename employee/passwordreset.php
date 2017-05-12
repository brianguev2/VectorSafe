<?php include 'employeeheader.php'; ?>
<div style="background-color:#CCD1D1;">
    <div class="container">
       <div class="jumbotron" style="background-color:#CCD1D1;">
             <p> Welcome to Vector Safe Network Security!<p>
                <p> Password Reset</p>
            <br></br>
            <form method="POST" action="passwordresetconfirm.php">
           <div class="form-group"> <span class="glyphicon glyphicon-user"></span>
        <label for="usr">Username:</label> 
         <input type="text" class="form-control" id="usr" name="username" required>
           </div>
            <div class="form-group"> <span class="glyphicon glyphicon-phone"></span>
        <label for="authCode">Phone</label> 
         <input type="text" class="form-control" id="phone" name="phone" required>
           <br>

          <br>
            <button type="submit" name="submit" class="btn btn-primary active" >Request Password Reset</button>
           </form>
           </div>
       </div>
       <div class="row">
</div>
</div>
	<div align="center">
    <script>
    function goBack() {
    window.location.replace("https://cyan.csam.montclair.edu/~torresa31/employee/employeelogin.php");
    }


    </script>
    <button onclick="goBack()" class="btn btn-primary active" >Go Back</button>
   
    </div>
<div class="jumbotron" style="background-color:#CCD1D1;">

  
</div>
<div class="container">
</div>
    </body>
</html>