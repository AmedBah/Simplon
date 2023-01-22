<?php 
	//session_start();
	//constantes
	define('SITEURL','http://localhost/projet/');
	define('LOCALHOST','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_NAME','bd');

	$connect=mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysql_error());
	$db_select= mysqli_select_db($connect, DB_NAME) or die(mysql_error());
?>