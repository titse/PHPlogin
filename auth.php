<?php
/*
Author: Tiffany Tse
Website: https://codenunja.wordpress.com
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
