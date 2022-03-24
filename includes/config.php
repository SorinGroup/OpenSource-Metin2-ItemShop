<?php
require_once '../configuration.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	if(isset($dev)) {
		echo "Connected to $dbname at $host successfully.";
	}
} catch (PDOException $pe) {
	if(isset($dev)) {
		die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
}
?>
