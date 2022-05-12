<?php
session_start();
$_SESSION['level']= '0';

header("Location:login.php");

?>