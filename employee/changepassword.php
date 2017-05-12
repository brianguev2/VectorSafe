<?php include 'employeeheader.php'; ?>
<!--The form to create a new employee account.
Info posted is sent to employeeaccountconfirm.php-->

<html>
<head>

</head>
<body style="background-color:#CCD1D1;">
<h1 style="padding-left:200px">Change Password</h1>
<form action="changepasswordconfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">
     <div class="form-group">
    <label>Old Password:</label>
    <input class="form-control" name="oldpass" required="required" type="password" id="oldpass">
  </div>
    <div class="form-group">
    <label>New Password:</label>
    <input class="form-control" name="pass" required="required" type="password" id="password">
  </div>
   <div class="form-group">
    <label>New Confirm Password:</label>
    <input class="form-control" name="password_confirm" required="required" type="password" id="password_confirm" oninput="check(this)">
    <script language='javascript' type='text/javascript'>
    	function check(input) {
        	if (input.value != document.getElementById('password').value) {
            	input.setCustomValidity('Password Must be Matching.');
        	} else {
            	// input is valid -- reset the error message
            	input.setCustomValidity('');
        	}
    	}
	</script>
	</div>
        <br>
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	<br>
	<br>
	</form>
	
	    	<div align="center">
    <script>
    function goBack() {
    window.location.replace("https://cyan.csam.montclair.edu/~torresa31/employee/splashpage.php");
    }


    </script>
    <button onclick="goBack()" class="btn btn-primary">Go Back</button>
   
    </div>
    <br>
    <br>
    
</body >
</html>
