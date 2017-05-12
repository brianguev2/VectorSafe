<?php include 'adminheader.php'; ?>
<!--The form to create a new employee account.
Info posted is sent to employeeaccountconfirm.php-->

<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body style="background-color:#CCD1D1;">
<h1 style="padding-left:200px">Create Employee Account</h1>
<form action="admincreateemployeeconfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">
  <div class="form-group">
    <label>First Name:</label>
    <input class="form-control" type="text" name="firstname" placeholder="First Name" required>
  </div>
  <div class="form-group">
    <label>Last Name:</label>
    <input class="form-control" type="text" name="lastname" placeholder="Last Name" required>
  </div>
  <div class="form-group">
    <label>Phone:</label>
    <input class="form-control" type="tel" name="phone" placeholder="123-456-7890" pattern="^\d{10}" required>
  </div>
 
  <div class="form-group">
    <label>Username:</label>
    <input class="form-control" type="text" name="username" placeholder="User Name" required>
  </div>
    <div class="form-group">
    <label>Password:</label>
    <input class="form-control" name="pass" required="required" type="password" id="password">
  </div>
   <div class="form-group">
    <label>Confirm Password:</label>
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
	<button type="submit" class="btn btn-primary" name="submit">Register</button>
	<br>
	<br>
	</form>
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

</body >
</html>
