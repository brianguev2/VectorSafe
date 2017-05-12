<?php
include '../dbh.php';

global $db;



$employee = $_POST['employee'];

//to check if thereis any selected

	
	if(isset($_POST['Repair'])){
	    if(isset($_POST['employee'])) {
	    
	foreach ($employee as $id){
		//delete from database
		$newKey=$_COOKIE['key'];
	mysqli_query($db, "UPDATE employee SET e_Key='$newKey' WHERE e_ID='$id'");


    }//end of loop		
		
        print '<script>alert("Connection Fixed");</script>';
        //redirects to troubleshoot.php
        print '<script>window.location.assign("troubleshoot.php");</script>';


	}
	else{
    print '<script>alert("Nobody was selected");</script>';
        //redirects to employeelist.php
    print '<script>window.location.assign("troubleshoot.php");</script>';
    }
}
	else{

	    
		    $num=mt_rand(0,9999999999);
		    setcookie('key', $num, time() + (86400 * 30), "/");;
			mysqli_query($db, "UPDATE admins SET admin_Key='$num' WHERE admin_ID='1'");

        print '<script>alert("New Key Set");</script>';
        //redirects to troubleshoot.php
        print '<script>window.location.assign("troubleshoot.php");</script>';	

		}
		
	
	








?>