<?php include 'adminheader.php'; ?>
<div style="background-color:#CCD1D1;">
    <div class="container">
       <div class="jumbotron" style="background-color:#CCD1D1;">
             <h1> Admin </h1>
             <br> 
             <p> Welcome to Vector Safe Network Security!<p>
                <p> Enter your login information to Continue</p>
            <br></br>
            <form method="POST" action="adminconfirm.php">
           <div class="form-group"> <span class="glyphicon glyphicon-user"></span>
        <label for="usr">Username:</label> 
         <input type="text" class="form-control" id="usr" name="username" required>
           </div>
           <br>
           <div class="form-group"> <div class="form-group"> <span class="glyphicon glyphicon-lock"></span>
                 <label for="pwd">Password:</label>
                 <input type="password" class="form-control" id="pwd" name="pass" required>
           </div>
          <br>
           <button type="submit" name="submit" class="btn btn-primary active">Submit</button>
                  <p align="center"><a href="../employee/employeelogin.php">Employee Login</a></p>
           </div>
       </div>
 
       <div class="row">
</div>
</div>

</div>
<div class="container">
</div>
    </body>
</html>
