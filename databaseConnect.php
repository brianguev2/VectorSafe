<?php

//Connect to database using PDO 
$dsn = 'mysql:host=localhost;dbname=torresa3_VectorSafe';
$username = 'root';
$password = '';

try 
{
    $db = new PDO($dsn, $username, $password);
} 
catch (PDOException $e) 
{
    $error_message = $e->getMessage();
    echo '<p>Not connected to database</p>';
    exit();
}

?>