<?php
include '../dbh.php';

class sshConnect
{
	public $cookie_name = "user";
	public $cookie_value = "1234567890";
	
	public function createCookie($db, $username)
	{
		setcookie($username, '2'); // 86400 = 1 day
		return $cookie_value;

	} 

	function verifyCookie($db, $user_name)
	{

	if(!isset($_COOKIE[$cookie_name])) {
    	echo "No Valid Key Found '" . $cookie_name . "' is not set!";
    	print '<script>window.location.assign("employeelogin.php");</script>';
    	return 0;
    }

	else 
	{
 
    	$result=mysqli_query($db, "SELECT e_Key FROM employee WHERE e_Username='$user_name'");
    	if($result->fetch_object()->e_Key==$_COOKIE[$cookie_value]){
			return 1;
    	}
    	else{
    		return 0;
    	}

	}

	}	

}
?>

