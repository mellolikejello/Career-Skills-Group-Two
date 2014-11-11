<?php
// Start the session
session_start();


$_SESSION["pass"] = $_POST['password'];

header( 'Location: ../admin.php' ) ;
?>