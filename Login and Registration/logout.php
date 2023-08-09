<?php 
session_start();
if(!isset($_SESSION['user_name'])){
	header('Location:dashboard.php');
}
unset($_SESSION['user_name']);
header("Location:index.php");

?>