<?php

//connect to database using mysqli
$db = mysqli_connect("localhost", "root", "", "torresa3_VectorSafe");

if(!$db) 
{
    die("Connection failed: ".mysqli_connect_error());
}
?>
