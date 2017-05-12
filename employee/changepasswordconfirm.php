<?php
include '../dbh.php';
global $db;
session_start();
$newPassword = mysqli_real_escape_string($db, $_POST['pass']);
$username=$_SESSION['user_name'];
$oldPass= $_POST['oldpass'];
$result=mysqli_query($db, "SELECT * FROM employee WHERE e_Username='$username'");
$obj=mysqli_fetch_object($result);
$table_password=$obj->e_Password;


if($oldPass == $table_password){
    

mysqli_query($db, "UPDATE employee SET e_Password='$newPassword' WHERE e_Username='$username'");

       print '<script>alert("Changes Have Been Made!");</script>';
        //redirects to splashpage.php
     print '<script>window.location.assign("splashpage.php");</script>';

}
else{
    
     print '<script>alert("Incorrect Old Password");</script>';
        //redirects to splashpage.php
     print '<script>window.location.assign("changepassword.php");</script>';
}
?>