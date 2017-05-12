<?php include 'employeeheader.php'; ?>
<div style="background-color:#CCD1D1;">
    <div class="container">
       <div class="jumbotron" style="background-color:#CCD1D1;">
             <p style="color:#FF0000;"> Your code doesn't match the one we sent you... or the code timed out </p>
                <p> Please re-enter the new code sent to your device</p>
            <br></br>
            <form method="POST" action="customerlogin2.php">
           <div class="form-group"> <span class="glyphicon glyphicon-user"></span>
        <label for="usr">Authorization Code</label> 
         <input type="text" class="form-control" id="usr" name="username" required>
         <br>
         <br>
            
            </div>
      
          <br>
         
           <button type="submit" name="submit" class="btn btn-primary active">Submit</button>
           
            <button type="submit" name="submit" class="btn btn-primary active" style="float:right;">Re-sent Code</button>
           </form>
           </div>
       </div>
       <div class="row">
</div>
</div>
<div class="jumbotron" style="background-color:#CCD1D1;">
<p align="center"><a href="customersignup.php">Register</a></p>
  
</div>
<div class="container">
</div>
    </body>
</html>
