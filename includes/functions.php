<?php
include('config.php');

class AleXso {
	
	
	
	
	
}

	if(isset($_POST['login'])) {
		
		$error_login = 0;
		if(empty($_POST['username'])) {
			$error_login = 1;
			$error_sidebar_username_empty = 1;
		}
		
		if (ctype_alnum($_POST['username'])) {
			$username = $_POST['username'];
		} else {
			$error_login = 1;
			$error_sidebar_username_empty = 1;
		}
		
		$check_username = $conn->prepare("SELECT login FROM account.account WHERE login=:login");
		$check_username->bindParam(':login', $username, PDO::PARAM_STR);
		$check_username->execute();
		if($check_username->rowCount() == 0) {
			$error_login = 1;
			$error_sidebar_username_empty = 1;
		}
		
		if(empty($_POST['password'])) {
			$error_login = 1;
			$error_sidebar_password_empty = 1;
		}
		
		$check_password = $conn->prepare("SELECT id FROM account.account WHERE login=:login and password=PASSWORD(:pass)");
		$check_password->bindParam(':login', $username, PDO::PARAM_STR);
		$check_password->bindParam(':pass', $_POST['password'], PDO::PARAM_STR);
		$check_password->execute();
		if($check_password->rowCount() == 0) {
			$error_login = 1;
			$error_sidebar_password_empty = 1;
		}
		
		if($error_login == 0) {
			$_SESSION['login'] = $username;
			$_SESSION['logged'] = "YES";
			setcookie("login", $username, time()+3600, "/","", 0);	
		}
	
	}
