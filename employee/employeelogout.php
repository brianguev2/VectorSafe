<?php
	session_start();
	session_destroy();
	header("Location: employeelogin.php");
	//also added logout to header so user can logout of website
?>