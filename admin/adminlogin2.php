<?php include 'adminheader.php'; 
      include '../authCode.php';
      
      global $db;
      $ac=new authCode();      

     $ac->sendCode($db, $_SESSION['adminuser_name'], "admin");
?>
<div style="background-color:#CCD1D1;">
    <div class="container">
       <div class="jumbotron" style="background-color:#CCD1D1;">
          
                <p> Please re-enter the new code sent to your device</p>
            <br></br>
            <form method="POST" action="adminconfirm2.php">
           <div class="form-group"> <span class="glyphicon glyphicon-user"></span>
        <label for="authCode">Authorization Code</label> 
         <input type="text" class="form-control" id="authCode" name="authCode" required>
         <br>
         <br>
            
            </div>
      
          <br>
         
           <button type="submit" name="submit" class="btn btn-primary active">Submit</button>
            <button type="submit" name="submit" style=float:right class="btn btn-primary active">Re-send</button>  
           </div>

       </div>
       
       <div class="row">
</div>
</div>
<div class="jumbotron" style="background-color:#CCD1D1;">

  
</div>
<div class="container">
</div>
    </body>
</html>
