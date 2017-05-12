<?php include 'adminheader.php'; ?>

<!DOCTYPE html>
<html>
<!--Displays page upon successful login.-->





<body style="background-color:#CCD1D1;">
<h1 style="padding-left:200px">Configure Authentication Code:</h1>
<br>
<form action="configureconfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">
  <div class="form-group">
    <label>Set Life Span of Authentication Code (In Minutes):</label>
    <input class="form-control" type="number" name="lifespan" placeholder="Recommendation: 10 minutes" required>
  </div>
  <br>
  <div class="form-group">
    <label>Set Authentication Code Length:</label>
    <input class="form-control" type="number" name="codeLength" placeholder="Minimum: 6 numbers" oninput="check(this)" required >
  </div>
    <script language='javascript' type='text/javascript'>
    	function check(input) {
        	if (input.value < 6) {
            	input.setCustomValidity('Code Length must be above 6 numbers.');
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
	<br>
	
	</form>
	
	<script>
    function goBack() {
    window.location.replace("https://cyan.csam.montclair.edu/~torresa31/admin/adminfunctions.php");
    }


    </script>
    <div align="center">
         <button onclick="goBack()" class="btn btn-primary active" >Go Back</button>
    </div>
   
   
    </div>
</body >
</html>
