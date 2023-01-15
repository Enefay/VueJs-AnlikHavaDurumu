<?php 
session_start();
unset($_SESSION["uyeID"]);
$_SESSION = array();
@session_destroy();
header('Refresh: 1; URL = index.php');
?>