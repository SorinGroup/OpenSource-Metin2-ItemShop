<?php

If(isset($error_login) AND $error_login == 1){
	echo $error_sidebar_username_empty;
	if(isset($error_sidebar_username_empty) AND $error_sidebar_username_empty == 1) {
		echo 'username gol';	
	}
	if(isset($error_sidebar_password_empty) AND $error_sidebar_password_empty == 1) {
		echo 'parola goala';	
	}
	
}
?>
