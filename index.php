<?php
include('includes/functions.php');
if(isset($_SESSION['login'])) {
	
	
} else{
	include('auth.php');
	exit();
}
?>
