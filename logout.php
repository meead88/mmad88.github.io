<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['role']);
session_destroy();
header("location: sign-in.php");
die();
?>
