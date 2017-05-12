<?php
include '../dbh.php';
include '../authCode.php';
global $db;
session_start();

$ac=new authCode();

if(isset($_POST['messageBox'])){
    $username=$_POST['Username'];

    $ac->sendMessage($db,$username,$_POST['messageBox'] );
    print '<script>window.location.assign("messagelist.php");</script>';
    
}
else{
    print '<script>alert("No Input!");</script>';
    print '<script>window.location.assign("sendMessage.php");</script>';
}
?>