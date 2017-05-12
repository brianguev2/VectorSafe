<?php
	session_start();
	session_destroy();
	header("Location: adminlogin.php");
	//also added logout to header so admin can logout of website
?>