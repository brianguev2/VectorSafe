<?php
include '../dbh.php';
include 'adminheader.php';
global $db;



$employee = $_POST['employee'];

//to check if thereis any selected
if(isset($_POST['employee'])) {
	if(isset($_POST['Delete'])){
	foreach ($employee as $id){
		//delete from database
	mysqli_query($db, "DELETE FROM employee WHERE e_ID='$id'");


}//end of loop		
		
        print '<script>alert("Employee(s) Deleted");</script>';
        //redirects to emlpoyeelist.php
        print '<script>window.location.assign("employeelist.php");</script>';


	}
	else{

	    
		foreach ($employee as $id){
			mysqli_query($db, "INSERT INTO frozen SELECT * FROM employee WHERE e_ID='$id'");
            mysqli_query($db, "DELETE FROM employee WHERE e_ID='$id'");


		}
		
        print '<script>alert("Employee(s) Frozen");</script>';
        //redirects to employeelist.php
        print '<script>window.location.assign("employeelist.php");</script>';		
	}

}

else{
     print '<script>alert("Nobody was selected");</script>';
        //redirects to employeelist.php
  print '<script>window.location.assign("employeelist.php");</script>';
}





?>