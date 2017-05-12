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
	mysqli_query($db, "DELETE FROM frozen WHERE e_ID='$id'");


}//end of loop		
		
        print '<script>alert("Employee(s) Deleted");</script>';
        //redirects to frozenlist.php
        print '<script>window.location.assign("frozenlist.php");</script>';


	}
	else{

	    
		foreach ($employee as $id){
			mysqli_query($db, "INSERT INTO employee SELECT * FROM frozen WHERE e_ID='$id'");
            mysqli_query($db, "DELETE FROM frozen WHERE e_ID='$id'");


		}
		
        print '<script>alert("Employee(s) Unfrozen");</script>';
        //redirects to frozenlist.php
        print '<script>window.location.assign("frozenlist.php");</script>';		
	}

}

else{
     print '<script>alert("Nobody was selected");</script>';
        //redirects to frozenlist.php
  print '<script>window.location.assign("frozenlist.php");</script>';
}





?>