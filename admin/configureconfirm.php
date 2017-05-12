<?php
include '../authCode.php';
$newLifeSpan= $_POST['lifespan'];
$newCodeLength= $_POST['codeLength'];

$ac=new AuthCode();

$ac->setLifeSpan($newLifeSpan);
$ac->setCodeLength($newCodeLength);
header("Location: http://cyan.csam.montclair.edu/~torresa31/admin/adminfunctions.php"); /* Redirect browser */
print '<script>alert("Configuration Complete!");</script>';

exit();

    

?>